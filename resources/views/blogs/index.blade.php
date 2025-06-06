@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blogs</h1>

    <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Create New Blog</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Thumbnail</th>
                <th>Button Text</th>
                <th>Button URL</th>
                <th>Display Order</th>
                <th>Publish</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($blogs as $blog)
            <tr data-id="{{ $blog->id }}">
                <td>{{ $blog->title }}</td>
                <td>
                    @if($blog->thumbnail)
                        <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="bg-img" width="100">
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $blog->button_text }}</td>
                <td>{{ $blog->button_url }}</td>
                <td>{{ $blog->display_order }}</td>
                <td>
                    <div class="form-check form-switch">
                        <input type="checkbox"
                            class="form-check-input publish-toggle"
                            data-id="{{ $blog->id }}"
                            {{ $blog->is_published ? 'checked' : '' }}>
                    </div>


                </td>

                <td>
                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this blog?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7">No blogs found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableBody = document.querySelector("tbody");

        if (tableBody) {
            new Sortable(tableBody, {
                animation: 150,
                onEnd: function () {
                    const order = [];
                    document.querySelectorAll("tbody tr").forEach((row, index) => {
                        order.push({
                            id: row.dataset.id,
                            display_order: index + 1
                        });
                    });

                    fetch("{{ route('blogs.updateOrder') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({ order: order })
                    })
                    .then(res => res.json())
                    .then(data => {
                        console.log(data);
                    })
                    .catch(err => console.error('Update failed', err));
                }
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Existing sortable code...

        // New AJAX publish toggle
        document.querySelectorAll('.publish-toggle').forEach((checkbox) => {
            checkbox.addEventListener('change', function () {
                const blogId = this.dataset.id;
                const isPublished = this.checked ? 1 : 0;

                fetch(`/blogs/${blogId}/toggle-publish`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        is_published: isPublished,
                    })
                })
                .then(response => {
                    if (!response.ok) throw new Error("Failed to update");
                    return response.json();
                })
                .then(data => {
                    console.log("Publish status updated:", data);
                })
                .catch(async err => {
                    const errorText = await err?.response?.text?.();
                    console.error("Server error:", errorText);
                    alert("Error updating publish status.");
                });

            });
        });
    });
</script>

@endsection

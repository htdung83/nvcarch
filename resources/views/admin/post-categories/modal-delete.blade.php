<div class="modal fade" id="delete{{ $item->id }}Modal" tabindex="-1" aria-labelledby="delete{{ $item->id }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h1 class="modal-title fs-5 text-white" id="delete{{ $item->id }}ModalLabel">Xóa mẫu tin `{{ $item->id }}`</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Chủ đề tin <span class="fw-bold text-danger">{{ $item->name }}</span> sẽ bị xóa và không hiển thị trên web nữa.</p>
                <p>Bạn có muốn tiếp tục?</p>
            </div>
            <form action="{{ route('admin.post-categories.destroy', $item) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-outline-danger">Xóa</button>

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </form>
        </div>
    </div>
</div>

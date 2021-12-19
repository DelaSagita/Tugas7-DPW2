<form action="{{ $url }}} " method="POST" onsubmit="return confirm('apakah ingin menghapus?')">
  @csrf
  @method("delete ")
  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
</form>
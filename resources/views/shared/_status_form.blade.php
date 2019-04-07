<form action="{{route('statuses.store')}}" method="post">
  @include('shared._errors')
  <textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..." name="content">{{old('content')}}</textarea>
  <div class="text-right">
    {{csrf_field()}}
    <button type="submit" class="btn btn-success mt-3">发布</button>
  </div>
</form>

@extends('app.post_create')
@section('editTitle',$item->title)
@section('editTag',$item->tag)
@section('editContent',$item->content)
@section('editId',$item->id)
@section('editMethod')
    {{method_field('PUT')}}
@endsection
@section('scripts')
    <script type="text/javascript">
        $('.summernote').summernote({
            height: 190,
            codemirror: {
                theme: 'monokai'
            },
            dialogsInBody: true
        });
        var content = '{!! $item->content !!}';
        $('.summernote').summernote('code',content);
        function submitForm(){
            $('#article').val($('.summernote').summernote('code'));
            $('#post_edit').submit();
        }
    </script>
@endsection
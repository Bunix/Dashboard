@extends('app.post_create')
@section('editTitle',$item->title)
@section('editTag',$item->tag)
@section('editContent',$item->text)
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
        var text = '{!! $item->text !!}';
        $('.summernote').summernote('code',text);
        function submitForm(){
            $('#article').val($('.summernote').summernote('code'));
            $('#post_edit').submit();
        }
    </script>
@endsection
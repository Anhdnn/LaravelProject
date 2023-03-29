<form action="{{route('form');}}" method="POST" enctype="multipart/form-data">
   <input type="file" name="file-test" id="">
    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    <button type="submit" >OK</button>
</form>
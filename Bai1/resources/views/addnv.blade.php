<h1>{{ $title }}</h1>
<form  method="post" action ="">
    @if($errors->any())
        <p style="color: red;">nhập đầy đủ thông tin</p>
    @endif
        <table style="display: block; ">
                <TR>
                    <td>IDNV:</td>
                    <td><input type="text" name="idnv" value="{{old('idnv')}}"></td>
                </TR> 
                <TR>
                    <td>Ho ten:</td>
                    <td> <input type="text" name="hoten" value="{{old('hoten')}}" ></td>
                </TR>

                <TR>
                    <td>IDPB:</td>
                    <td>
                        <!-- <select name="idpb" id="" style="width: 100%;">
                           
                        </select> -->
                        <input type="text" name="idpb" value="{{old('idpb')}}" >
                     </td> 
                </TR>
                <TR>
                    <td>Dia chi:</td>
                    <td><input type="text" name="diachi"value="{{old('diachi')}}" ></td>
                </TR>
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

                <tr style="display: block;margin-top: 2rem; ">
                    <td > 
                        <input style="text-decoration: none; color: black;padding: 10px;border: 1px solid;" type="submit" value="OK" name="submit">
                    </td>
                    <td>
                        <a style="text-decoration: none; color: black;padding: 10px;border: 1px solid;margin-left: 100px;" href="danh-sach-nhan-vien">Return</a>
                    </td>
                </TR>
        </table>
    </form>
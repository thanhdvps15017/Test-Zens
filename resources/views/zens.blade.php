<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    
    <div class="container"> 
        {{-- <form action="{{ route('index_') }}" method="POST">
            @csrf
                <label for="">Nhập phần  tử  đầu  tiên  của  mảng  : </label>
                <input type="text" name="number" value="">
                <div><button type="submit" name="submit">Tạo mảng</button></div>
        </form> --}}



        <form action="{{ route('index_') }}" method="POST">
            @csrf
            <label>Nhập phần  tử  đầu  tiên  của  mảng  : </label>
            <input type="text" name="number">
          
            <input type="submit" name="submit" value="Tạo mảng">
          </form>

        <?php if(isset($_POST['submit'])){  ?>
            <table class="table">
                <tr>
                    <td>Chuỗi được tạo </td>
                    <td><?php $string = implode('   ', $arr); echo $string ?></td>
                </tr>
                <tr>
                    <td>Tổng 4 số nhỏ nhất</td>
                    <td><?php $max = max($arr); $tongMin = array_sum($arr) - $max; echo $tongMin;?></td>
                </tr>
                <tr>
                    <td>Tổng 4 số lớn nhất</td>
                    <td><?php $min = min($arr); $tongMax = array_sum($arr) - $min; echo $tongMax;?></td>
                </tr>
            </table>
        <?php } ?>
    </div>
    

</html>

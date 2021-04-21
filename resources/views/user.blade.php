<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<form action="" id="someform">
    <input type="text" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit">Kirim</button>
</form>

<script>
    $(document).ready(function(){
        $.ajax({
            url:"{{ Route('v1-index') }}",
            success:function(result){
                console.log(result)
            }
        });

        $("#someform").submit(function(e){
            e.preventDefault()
            $.ajax({
                url:"{{ Route('v1-store') }}",
                type:"POST",
                data:{
                    email:$("#email").val(),
                    password:$("#password").val(),
                },
                success:function(data){
                    alert("sukses")
                    console.log("sukses kirim data")
                    console.log(data)
                },
                error:function(error){
                    alert("gagal")
                    console.log(error)
                }
            })
        })
    })

</script>

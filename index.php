</style>   
    </head>    
    <body>     
        <form>
        <img src="https://i.pinimg.com/564x/36/a1/0e/36a10e9cd46cae439aea8b4ad9c77f3c.jpg"  width="200" 
     height="200"> 
    
            <div class="container">   
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" name="userid" required>  <br>
                <label> Password  : </label>   
                <input type="password" placeholder="Enter Password" name="pwd" required> <br>
                <tr>
                
                    <td ><input type="Reset" value="CLEAR"></td> 
                    <td><input type="submit" onclick="return check(this.form)" value="SUBMIT">

                    </td>
                </tr>
                <script language="javascript">
function check(form)


{
if(form.userid.value == "Seidana" && form.pwd.value == "444")
{
    form.action = "https://seidanasprofilee.herokuapp.com/";
    return true;
}


else
{ 
  alert("Error Password or Username")
  return false;
}
}
</script>
            </div>   
        </form> 

    </body>     


    </html>
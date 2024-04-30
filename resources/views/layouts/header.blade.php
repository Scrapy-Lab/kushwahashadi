<div style="position:relative">
    <img src="./images/HomePage_Default_Final.webp" w="100" h="100" alt="" />
    <div class="header_logo">
        <img src="./images/sangam.svg" w="100" h="100" alt="" />
    </div>
    <div class="header_login">
        <img src="./images/language-switcher-web.svg" w="10" h="10" alt="" />
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
            class="log_in">Login</button>
        <div class="register">Register</div>
    </div>
</div>
<div id="id01" class="modal">
    <form class="modal-content animate" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <img src="./images/users.jpeg" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username ..." name="username" required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password ..." name="password" required>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br><span style="color:rgb(216, 35, 35)">Forgot&nbsp;<a href="#"
                    style="color:rgb(216, 35, 35);text-decoration: none;">password? </a></span>
        </div>
    </form>
</div>

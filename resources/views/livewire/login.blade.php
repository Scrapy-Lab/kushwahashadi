<div>
    <form class="modal-content animate" wire:submit.prevent="login" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <h2>Log In</h2>
        </div>
        <div class="container">
            <label>Username : </label>
            <input type="email" wire:model="email" placeholder="Enter Email ..." required>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password ..." wire:model="password" required>
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br><span style="color:rgb(216, 35, 35)">Forgot&nbsp;<a href="#"
                    style="color:rgb(216, 35, 35);text-decoration: none;">password? </a></span>
        </div>
    </form>
</div>

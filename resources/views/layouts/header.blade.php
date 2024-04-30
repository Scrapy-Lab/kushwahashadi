<div style="position:relative">
    <img src="./images/HomePage_Default_Final.webp" class="w-100" alt="" />
    <div class="header_logo">
        <img src="./images/sangam.svg" w="100" h="100" alt="" />
    </div>
    <div class="header_login">
        <img src="./images/language-switcher-web.svg" w="10" h="10" alt="" />
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"
            class="log_in">Login</button>
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"
            class="register">Register</button>
    </div>
</div>
<div id="id01" class="modal">
    <form class="modal-content animate" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <h2>Log In</h2>
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
{{-- Register Modal --}}
<div id="id02" class="modal">
    <form class="modal-content animate" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close"
                title="Close Modal">&times;</span>
            <h2>Register</h2>
        </div>
        <div class="container d-flex justify-content-between flex-wrap py-2">
            <div class="inputgroup d-flex">
                <label>On Behalf </label>
                <select name="" id="">
                    <option value="">Self</option>
                    <option value="">Son</option>
                    <option value="">Daughter</option>
                </select>
            </div>

            <div class="inputgroup d-flex">
                <label>Name of Person Who Created Profile (Optional) </label>
                <input type="text" placeholder="Who Created Profile">
            </div>

            <div class="inputgroup d-flex">
                <label>Groom/Bride Name</label>
                <input type="text" placeholder="Groom/Bride Name">
            </div>

            <div class="inputgroup d-flex">
                <label>Surname</label>
                <input type="text" placeholder="Surname">
            </div>

            <div class="inputgroup d-flex">
                <label>Gender</label>
                <select name="" id="">
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
            </div>

            <div class="inputgroup d-flex">
                <label>Email</label>
                <input type="Email" placeholder="Email">
            </div>

            <div class="inputgroup d-flex">
                <label>DOB</label>
                <input type="date" name="" id="">
            </div>

            <div class="inputgroup d-flex">
                <label>Mobile</label>
                <input type="tel" name="" id="" placeholder="Mobile No.">
            </div>

            <div class="inputgroup d-flex">
                <label>Highest Degree</label>
                <input type="text" name="" id="" placeholder="Highest Education">
            </div>

            <div class="inputgroup d-flex">
                <label>Area</label>
                <input type="text" name="" id="" placeholder="Area">
            </div>

            <div class="inputgroup d-flex">
                <label>Height</label>
                <select name="" id="">
                    <option value="">5'0'{1.52 mts}</option>
                    <option value="">5'0'{1.52 mts}</option>
                    <option value="">5'0'{1.52 mts}</option>
                </select>
            </div>

            <div class="inputgroup d-flex">
                <label>Profession</label>
                <input type="text" name="" id="" placeholder="Profession">
            </div>

            <div class="inputgroup d-flex">
                <label>Password</label>
                <input type="password" name="" id="" placeholder="Password">
            </div>

            <div class="inputgroup d-flex">
                <label>Confirm Password</label>
                <input type="password" name="" id="" placeholder="Confirm Password">
            </div>



        </div>
        <label for="" class="px-3">
        <input type="checkbox" name="" id="">By signing up, I agree to Term and Conditions</label>

        <div class="submitButtn"><input type="submit" value="Register"></div>
        <div class="text-center">Already A Member <a href="#">Log In</a></div>

    </form>
</div>

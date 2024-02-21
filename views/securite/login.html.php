
    <div class="connexion">
        <form action="<?=WEBROOT;?>" method="post">
            <h2 class="log">Login</h2>
            <div class="emai">
                <label for="emai">Email Or Username</label>
                <div>
                    <input type="text" class="enter" name="login" placeholder="Enter Email">
                </div>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <div>
                    <input type="password" name="pwd" class="enter" placeholder="Enter Password">
                </div>
            </div>
            
            <div class="login">
                <button type="submit"  name="action" value="form-login">Login</button>
            </div>
            
        </form>
    </div>

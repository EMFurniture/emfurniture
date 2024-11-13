<div class="web-head">
    <div class="logo">
        <img src="/assets/logo.svg" width="240px">
    </div>
    <div class="login">
        <div ng-show="!isLoggedIn" class="login-form">
            <form ng-submit="showLogin ? login() : signup()">
                <div class="form-group">
                    <input type="text" class="form-control" id="username" ng-model="user.username" placeholder="Username" required>
                    <input type="password" class="form-control" id="password" ng-model="user.password" placeholder="Password" required>
                    <div class="main-login-btn">
                        <button href="#" class="login-btn" ng-click="toggleLogin()">Login</button>
                        <button type="submit" class="signup-btn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        <div ng-show="isLoggedIn" class="welcome">
            <p>Welcome, {{ user.username }}!</p>
            <button class="btn btn-secondary" ng-click="logout()">Logout</button>
        </div>
    </div>
</div>

<div class="overlay-form">
        <div class="container-form sign-up-container"> 
            <form method="POST" action="/registr">
                    <h2 >Fill in a form for registration</h2>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <div class=" row-form mb4">
                        <input type="text" required name="first_name" class="mb-4" 
                         placeholder="First name">
                        <input type="text" required name="last_name" class="mb-4" 
                        placeholder="Last name">
                    </div>
                    <div class="row-form mb4">
                        <input type="email" required name="email" class="mb-4" 
                        placeholder="email">
                    </div>
                    <div class="row-form mb4">
                        <input type="password" required name="password" 
                        placeholder="Enter password">
                        <input type="password" required name="confirm_password" 
                        placeholder="Confirm password">
                    </div>
                    <div class="row-form mb4">
                        <input type="text" required name="phone_number" 
                        placeholder="phone number">
                    </div>
                    <button type="submit" class="btn-form btn-dark btn-block my=3">Sign Up</button>
                    <p>Already a member?<a href="/login">Login</a></p>
            </form>
        </div>    
</div>
    
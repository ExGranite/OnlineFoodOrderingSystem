# Mozart - ONLINE FOOD ORDERING SYSTEM

This is a project done in completion to the Software Engineering course. <br> The framework used is Laravel 8.0. <br> The main focus was on the software and how it works on the backend.

### Source Code(s):

- php
- html5
- css3
- javascript

### HTML Templates Used:

- [Klassy Cafe Template](https://templatemo.com/tm-558-klassy-cafe/)
- [CoronaAdmin Free Admin Template](https://github.com/BootstrapDash/corona-free-dark-bootstrap-admin-template)
- [Responsive Table-less Shopping Cart](https://codepen.io/alex_rodrigues/pen/ABGdg)
- [Credit Card Validation](https://codepen.io/hswd/full/JYvgBW)

Snippets from the templates have been used, and modified using css, javascript and added php. The entire template has not been used.

### Features:

- #### Default
    - View Home Page
    - Home Page Shows 6 Randomized Food Items (per Category) from the Database as Specials
    - View Menu
    - Login (Admin account is redirected to Admin Dashboard || User account is redirected to homepage)
    - Register
    - Logout (Redirected to homepage)
    - Navbar Shows Orders and Carts only when Logged in
- #### Customer Only
    - Add To Cart
    - Remove From Cart
    - Live Cart Count
    - Enter Payment Information
    - Confirm Order
    - Checkout Button in Carts Page uses Dropdown to Show Payment Information Input Fields
    - View Carts
    - View Orders
- #### Admin Only
    - View Admin Dashboard (Contains generalized information about accounts, food menu, carts, and orders.)
    - View All User Accounts
    - Delete User Accounts (Cannot Delete Admin Accounts)
    - Add Food Items
    - View Food Menu (from Admin Dashboard)
    - Edit Food Items
    - Delete Food Items
    - View Active Carts
    - View Active Orders
    - Edit Active Order Status
    - View Completed Orders

### Tests:

- #### Unit (Manually Written)
    - Admin Controller Test
      <br>✓ account
      <br>✓ deleteaccount
      <br>✓ foodmenu
      <br>✓ addfoodpage
      <br>✓ uploadfood
      <br>✓ editfoodpage
      <br>✓ admincart
      <br>✓ activeorderpage
      <br>✓ editfood
      <br>✓ deletefood
      <br>✓ changestatusorder
    - Home Controller Test
      <br>✓ index
      <br>✓ redirectslogin
      <br>✓ addtocart
      <br>✓ orderconfirm
      <br>✓ showcart
      <br>✓ showmenu
      <br>✓ removefromcart
      <br>✓ showorderpage
    - Web Test
      <br>✓ index
      <br>✓ redirectslogin
      <br>✓ account
      <br>✓ deleteaccount
      <br>✓ foodmenu
      <br>✓ addfoodpage
      <br>✓ uploadfood
      <br>✓ deletefood
      <br>✓ editfoodpage
      <br>✓ editfood
      <br>✓ activeorderpage
      <br>✓ admincart
      <br>✓ changestatusorder
      <br>✓ addtocart
      <br>✓ showcart
      <br>✓ showorderpage
      <br>✓ removefromcart
      <br>✓ orderconfirm
      <br>✓ showmenu
      <br>✓ dashboard
- #### Feature (Provided by Laravel)
    - Authentication Test
      <br>✓ login screen can be rendered
      <br>✓ users can authenticate using the login screen
      <br>✓ users can not authenticate with invalid password
    - Browser Sessions Test
      <br>✓ other browser sessions can be logged out
    - Delete Account Test
      <br>✓ user accounts can be deleted
      <br>✓ correct password must be provided before account can be deleted
    - Password Confirmation Test
      <br>✓ confirm password screen can be rendered
      <br>✓ password can be confirmed
      <br>✓ password is not confirmed with invalid password
    - Password Reset Test
      <br>✓ reset password link screen can be rendered
      <br>✓ reset password link can be requested
      <br>✓ reset password screen can be rendered
      <br>✓ password can be reset with valid token
    - Profile Information Test
      <br>✓ current profile information is available
      <br>✓ profile information can be updated
    - Registration Test
      <br>✓ registration screen can be rendered
      <br>✓ new users can register
    - Two Factor Authentication Settings Test
      <br>✓ two factor authentication can be enabled
      <br>✓ recovery codes can be regenerated
      <br>✓ two factor authentication can be disabled
    - Update Password Test
      <br>✓ password can be updated
      <br>✓ current password must be correct
      <br>✓ new passwords must match

### Commit Versions:
 - OFOS 1.0: Original Commit
 - OFOS 1.1: Changes Made After Unit Testing
 - OFOS 1.2: Deleted Redundant Code FIles
 - TEST 1.1: Manual Unit Tests Added (Other Than Laravel Provided Tests)
 - SPRINTS 1.0: Sprint 2 || [Sprint 4](https://youtu.be/EZAYFAoIE8I) || [Sprint 5](https://youtu.be/9ZPcUDxs_Eg)
 - DATABASE BACKUP 1.0: Database Backup File `ofos.sql` Added

### License

Please use for education purposes only. It is alright to take inspirations, but please do not use the exact software for your projects/assignments. <br> <br> © Copyright Ahmad Al Asad

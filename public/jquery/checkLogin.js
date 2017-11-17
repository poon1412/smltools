$(document).ready(function () {

    $.validator.setDefaults({
        errorClass: 'badge badge-danger',
        highlight: function (element) {
            $(element)
                .closest('.form-control')
                .addClass('is-invalid')
        },
        unhighlight: function (element) {
            $(element)
                .closest('.form-control')
                .removeClass('is-invalid')
        }
    })
    $.validator.addMethod("nowhitespace", function (value, element) {
        return this.optional(element) || /^\S+$/i.test(value);
    }, "No space please")
    $.validator.addMethod("loginRegex", function (value, element) {
        return this.optional(element) || /^[a-z0-9\-]+$/i.test(value);
    }, "Username must contain only letters, numbers, or dashes.");

    $("#signup-form").validate({
        rules: {
            username:{
                required: true,
                nowhitespace: true,
                minlength: 4,
                loginRegex:true,
                remote: {
                    url: "http://localhost/smltools/auth/checkDup",
                    type: "post",
                    data: {
                        username: function () {
                            return $("#username").val()
                        }
                    }
                }
            },
            name: "required",
            sirname: "required",
            email:{
                required: true,
                email: true,
            },
            password:"required",
            password2:{
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            username:{
                required :"Username is required",
                remote: jQuery.validator.format("{0} is already taken.")
            },
            name:{
                required :"Name is required"
            },
            sirname:{
                required :"Lastname is required"
            },
            email:{
                required :"Email is required"
            },
            password:{
                required :"Password is required"
            },
            password2:{
                required :"You need to confirm password",
                equalTo: "Please enter your password again"
            }
        }
    })
    $('#signup').click(function () {
        if ($('#signup-form').valid()) {
            var username = $("#username").val()
            var name = $("#name").val()
            var sirname = $("#sirname").val()
            var email = $("#email").val()
            var password = $("#password").val()
            $.ajax({
                type: 'POST',
                url: "http://localhost/smltools/auth/signup",
                data: {
                    username: username,
                    name: name,
                    sirname: sirname,
                    email: email,
                    password: password
                },
                success: function (data) {
                    window.location.href ="http://localhost/smltools/auth/login";
                }
            })    
        }
    })
})
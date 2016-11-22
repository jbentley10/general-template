 $(document).ready(function() {
     $('#billshipcheck').click(function() {
         if ($("#billshipcheck").prop("checked", true)) {
             $("#hiddenbilling").toggle();
             $("#billaddress").prop("required", false);
             $("#billstate").prop("required", false);
             $("#billcountry").prop("required", false);
             $("#billzip").prop("required", false);
         } else {
             $("#hiddenbilling").toggle();
             $("#billaddress").prop("required", true);
             $("#billstate").prop("required", true);
             $("#billcountry").prop("required", true);
             $("#billzip").prop("required", true);
         }
     });


     $('#index-form').bootstrapValidator({
         feedbackIcons: {
             valid: 'glyphicon glyphicon-ok',
             invalid: 'glyphicon glyphicon-remove',
             validating: 'glyphicon glyphicon-refresh'
         },
         fields: {
             ccnumber: {
                 validators: {
                     creditCard: {
                         message: 'The credit card number is not valid'
                     }
                 }
             },
             cvvnumber: {
                 validators: {
                     cvv: {
                         creditCardField: 'ccnumber',
                         message: 'The CVV number is not valid'
                     }
                 }
             }

         }
     });


 });


 $(document).ready(function() {
     //***********************

     $.validator.addMethod(
         "CCExp",
         function(value, element, params) {
             var minMonth = new Date().getMonth() + 1;
             var minYear = new Date().getFullYear();
             var $month = $(params.cardExpMonth);
             var $year = $(params.cardExpYear);

             var month = parseInt($(params.month).val(), 10);
             var year = parseInt($(params.year).val(), 10);

             if ((year > minYear) || ((year === minYear) && (month >= minMonth))) {
                 return true;
             } else {
                 return false;
             }
         }, "Your Credit Card Expiration date is invalid.");

     //**********************

     $("#index-form").validate({
         rules: {
             cardExpYear: {
                 CCExp: {
                     month: "#cardExpMonth",
                     year: "#cardExpYear"
                 }
             },
         },
         highlight: function(element) {
             var id_attr = "#" + $(element).attr("id") + "1";
             $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
             $(id_attr).removeClass('glyphicon-ok').addClass('glyphicon-remove');
         },
         unhighlight: function(element) {
             var id_attr = "#" + $(element).attr("id") + "1";
             $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
             $(id_attr).removeClass('glyphicon-remove').addClass('glyphicon-ok');
         },
         errorElement: 'span',
         errorClass: 'help-block',
         errorPlacement: function(error, element) {
             if (element.length) {
                 error.insertAfter(element);
             } else {
                 error.insertAfter(element);
             }
         },
         ignore: ".ignore"
     });



 });

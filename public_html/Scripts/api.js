var offerID = '42';
var fields = '';
var username = 'test';
var password = '8e9cf9da38c04d65a0';

function RecordClick(pageTypeID)
{
    var postUrl = 'https://crm.veloxcrm.com/api/OfferClick/Add';
    var browser = window.navigator.appName;
    var os = GetOsName();
    var ip = myip;
    var affiliateID = getQueryStringValueByName('affiliateid');
    var subAffiliateID = getQueryStringValueByName('subaffiliateid');
    var c1 = getQueryStringValueByName('c1');
    var c2 = getQueryStringValueByName('c2');
    var c3 = getQueryStringValueByName('c3');
    var c4 = getQueryStringValueByName('c4');
    var c5 = getQueryStringValueByName('c5');
    var offerClick = {
        'Browser': browser,
        'Os': os,
        'Ip': ip,
        'ApiUserName': username,
        'ApiPassword': password,
        'PageUrl': window.location.href,
        'Referer': document.referrer,
        'OfferID': offerID,
        'AffiliateID': affiliateID,
        'SubAffiliateID': subAffiliateID,
        'PageTypeID': pageTypeID,
        'Custom1': c1,
        'Custom2': c2,
        'Custom3': c3,
        'Custom4': c4,
        'Custom5': c5
    };

    Post(offerClick, postUrl, 'click', false, null);
}

function AddProspect(isLastPage, nextPageName)
{
    window.onbeforeunload = null;

    var postUrl = 'https://crm.veloxcrm.com/api/Prospects/Add';
    var browser = window.navigator.appName;
    var os = GetOsName();
    var ip = myip;
    var affiliateID = getQueryStringValueByName('affiliateid');
    var subAffiliateID = getQueryStringValueByName('subaffiliateid');

    var form = document.forms['Lead'];

    var firstName = form.txtFirstName.value;
    var lastName = form.txtLastName.value;
    var email = form.txtEmailaddress.value;
    var phone = form.txtPhoneNumber.value;
    var address1 = form.txtAddress1.value;
    var address2 = form.txtAddress2.value;
    var city = form.txtCity.value;
    var stateID = form.ddlStates.options[form.ddlStates.selectedIndex].value;
    var state = form.ddlStates.options[form.ddlStates.selectedIndex].text;
    var zip = form.txtZip.value;
    var countryID = form.ddlCountries.options[document.getElementsByName('ddlCountries')[0].selectedIndex].value;
    var isAgreeToTerms = form.chkAcceptTermsOfService.checked;
    var billingCycleProfileID = document.getElementById('hfSelectedBillingCycleProfileID').value;

    fields = '&firstname=' + firstName;
    fields += '&lastname=' + lastName;
    fields += '&email=' + email;
    fields += '&phone=' + phone;
    fields += '&address=' + address1;
    fields += '&city=' + city;
    fields += '&state=' + state;
    fields += '&zip=' + zip;

    var prospect = {
        'FirstName': firstName,
        'LastName': lastName,
        'Email': email,
        'Phone': phone,
        'Address1': address1,
        'Address2': address2,
        'City': city,
        'StateID': stateID,
        'Zip': zip,
        'CountryID': countryID,
        'AgreeToTelemarketing': isAgreeToTerms,
        'AgreeToTerms': isAgreeToTerms,
        'OS': os,
        'Browser': browser,
        'IP': ip,
        'OfferID': offerID,
        'AffiliateID': affiliateID,
        'SubAffiliateID': subAffiliateID,
        'BillingCycleProfileID': billingCycleProfileID,
        'PageUrl': window.location.href
    };

    Post(prospect, postUrl, 'prospect', isLastPage, nextPageName);
}

function AddSale(isLastPage, nextPageName)
{
    window.onbeforeunload = null;

    var postUrl = 'https://crm.veloxcrm.com/api/Orders/NewSale';
    var browser = window.navigator.appName;
    var os = GetOsName();
    var ip = myip;
    var billingCycleProfileID = getQueryStringValueByName('billingcycleprofileid');
    var prospectID = getQueryStringValueByName('prospectid');

    var form = document.forms['checkout'];

    var paymentMethodID = form.ddlPaymentMethod.options[form.ddlPaymentMethod.selectedIndex].value;
    var cardNumber = form.txtCreditCard.value;
    var expiryMonth = form.ddlExpiryMonth.options[form.ddlExpiryMonth.selectedIndex].value;
    var expiryYear = form.ddlExpiryYear.options[form.ddlExpiryYear.selectedIndex].value;
    var cvv = form.txtCVV.value;
    var isAgreeToTerms = form.chkAcceptTermsOfService.checked;

    var sale = {
        'PaymentMethodID': paymentMethodID,
        'CardNumber': cardNumber,
        'ExpiryMonth': expiryMonth,
        'ExpiryYear': expiryYear,
        'Cvv': cvv,
        'AgreeToTelemarketing': isAgreeToTerms,
        'AgreeToTerms': isAgreeToTerms,
        'OS': os,
        'Browser': browser,
        'IP': ip,
        'BillingCycleProfileID': billingCycleProfileID,
        'ProspectID': prospectID,
        'PageUrl': window.location.href
    };

    Post(sale, postUrl, 'sale', isLastPage, nextPageName);
}

function AddUpSale(offerID, isLastUpsale, nextPageName)
{
    window.onbeforeunload = null;

    var postUrl = 'https://crm.veloxcrm.com/api/Orders/UpSale';
    var orderID = getQueryStringValueByName('orderid');

    var form = document.forms['UpSale'];

    var paymentMethodID = null, cardNumber = null, expiryMonth = null, expiryYear = null, cvv = null, isAgreeToTerms = false;

    if (form.ddlPaymentMethod)
        paymentMethodID = form.ddlPaymentMethod.options[form.ddlPaymentMethod.selectedIndex].value;
    if (form.txtCreditCard)
        cardNumber = form.txtCreditCard.value;
    if (form.ddlExpiryMonth)
        expiryMonth = form.ddlExpiryMonth.options[form.ddlExpiryMonth.selectedIndex].value;
    if (form.ddlExpiryYear)
        expiryYear = form.ddlExpiryYear.options[form.ddlExpiryYear.selectedIndex].value;
    if (form.txtCVV)
        cvv = form.txtCVV.value;
    if (form.chkAcceptTermsOfService)
        isAgreeToTerms = form.chkAcceptTermsOfService.checked;
    var billingCycleProfileID = document.getElementById('hfSelectedBillingCycleProfileID').value;

    var upSale = {
        'PaymentMethodID': paymentMethodID,
        'CardNumber': cardNumber,
        'ExpiryMonth': expiryMonth,
        'ExpiryYear': expiryYear,
        'Cvv': cvv,
        'AgreeToTelemarketing': isAgreeToTerms,
        'AgreeToTerms': isAgreeToTerms,
        'OfferID': offerID,
        'BillingCycleProfileID': billingCycleProfileID,
        'OrderID': orderID,
        'PageUrl': window.location.href
    };

    Post(upSale, postUrl, 'upsale', isLastUpsale, nextPageName);
}

function SkipUpsale(isLastUpsale, nextPageName)
{
    window.onbeforeunload = null;
    if (isLastUpsale)
        window.location = '/thankyou.php?orderid=' + getQueryStringValueByName('orderid');
    else
        window.location = '/' + nextPageName + '?orderid=' + getQueryStringValueByName('orderid');
}

function ThankYou()
{
    var orderID = getQueryStringValueByName('orderid');
    var postUrl = 'https://crm.veloxcrm.com/api/Orders/ThankYou?orderid=' + orderID;

    $.ajax({
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json; charset=utf-8'
        },
        type: 'GET',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        url: postUrl,
        beforeSend: function (xhr)
        {
            xhr.setRequestHeader('Authorization', 'Basic ' + btoa(username + ':' + password))
        },
        success: function (result)
        {
            if (result.Status)
            {

                if (result.StatusCode == 110)
                {
                    document.getElementById('lblCustomerNameBig').innerHTML = result.Name;
                    document.getElementById('lblCustomerNameSmall').innerHTML = result.Name;
                    document.getElementById('lblPhone').innerHTML = result.Phone;
                    document.getElementById('lblEmail').innerHTML = result.Email;
                    document.getElementById('lblEmailBottom').innerHTML = result.Email;
                    document.getElementById('lblAddress').innerHTML = result.Address;
                    document.getElementById('lblCityStateZip').innerHTML = result.City + ', ' + result.State + ' ' + result.Country + ' ' + result.Zip;
                    document.getElementById('lblBillingAddress').innerHTML = result.BillingAddress;
                    document.getElementById('lblBillingCityStateZip').innerHTML = result.BillingCity + ', ' + result.BillingState + ' ' + result.BillingCountry + ' ' + result.BillingZip;

                    var content = '';

                    for (var i = 0; i < result.Orders.length; i++)
                    {

                        var order = result.Orders[i];

                        content += '<table class="package">';
                        content += '     <thead>';
                        content += '         <tr class="package-header">';
                        content += '             <td colspan="4">Order # ' + order.OrderID +
                        ' </td>';
                        content += '         </tr>';
                        content += '     </thead>';
                        content += '     <tbody class="package-Info">';
                        content += '         <tr>';
                        content += '             <td>Product</td>';
                        content += '             <td>Price</td>';
                        content += '             <td>Quantity</td>';
                        content += '             <td>Amount</td>';
                        content += '         </tr>';
                        for (var j = 0; j < order.Items.length; j++)
                        {
                            var item = order.Items[j];
                            content += '         <tr>';
                            content += '             <td>' + item.Name + '</td>';
                            content += '             <td>$' + item.Price + '</td>';
                            content += '             <td>' + item.Quantity + '</td>';
                            content += '             <td>$' + item.TotalAmount + '</td>';
                            content += '         </tr>';
                        }
                        content += '         <tr>';
                        content += '             <td colspan="4" style="text-align: right;">';
                        content += '                 <hr />';
                        content += '                 <p>Price : $' + order.TotalPrice + '</p>';
                        content += '                 <p>Shipping : $' + order.TotalShipping + '</p>';
                        content += '                 <p>Sales Tax : $' + order.SalesTax + '</p>';
                        content += '                 <p>Discount : $' + order.Discount + '</p>';
                        content += '                 <hr />';
                        content += '                 <p>Total : $' + order.GrandTotal + '</p>';
                        content += '             </td>';
                        content += '         </tr>';
                        content += '     </tbody>';
                        content += ' </table>';
                    }

                    document.getElementById('order-container').innerHTML = content;
                }
            }
        },
        error: function (xhr, textStatus, errorThrown)
        {
            if (xhr.responseText != '')
            {
                var json = JSON.parse(xhr.responseText);
                window.location = '/Error.php?&error=' + json.StatusMessage;
            }
            else
            {
                window.location = '/Error.php';
            }
        }
    });
}

function Post(data, postUrl, requestType, isLastPage, nextPageName)
{
    $.ajax({
        headers: {
            Accept: 'application/json',
            'Content-Type': 'application/json; charset=utf-8'
        },
        type: 'POST',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        url: postUrl,
        data: JSON.stringify(data),
        beforeSend: function (xhr)
        {
            xhr.setRequestHeader('Authorization', 'Basic ' + btoa(username + ':' + password))
        },
        success: function (result)
        {
            if (result.Status)
            {
                switch (requestType)
                {
                    case 'click':
                        if (result.StatusCode == 100)
                        {
                            //click Recorded
                        }
                        break;
                    case 'prospect':
                        if (result.StatusCode == 101)//prospect saved
                        {
                            window.location = '/' + nextPageName + '?prospectid=' + result.ProspectId + '&billingcycleprofileid=' + data.BillingCycleProfileID + '&affiliateid=' + data.AffiliateID + '&subaffiliateid=' + data.SubAffiliateID + fields;
                        }
                        break;
                    case 'sale':
                        if (result.StatusCode == 102)//Order Completed
                        {
                            if (isLastPage)//if this is last page (no upsales) then redirect to thank you else to upsale
                                window.location = '/thankyou.php?orderid=' + result.OrderID; //it should be Main Sale OrderID from Lead Page
                            else
                                window.location = '/' + nextPageName + '?orderid=' + result.OrderID;
                        }
                        break;
                    case 'upsale':
                        if (result.StatusCode == 102)
                        {
                            if (isLastPage)//if this is last upsale page then redirect to thank you else to next upsale page
                                window.location = '/thankyou.php?orderid=' + data.OrderID; //it should be Main Sale OrderID from Lead Page
                            else
                                window.location = '/' + nextPageName + '?orderid=' + data.OrderID;
                        }
                        break;
                    default:
                        break;
                }
            }
        },
        error: function (xhr, textStatus, errorThrown)
        {
            switch (requestType)
            {
                case 'click':
                    break;
                case 'prospect':
                case 'sale':
                case 'upsale':
                default:
                    if (xhr.responseText != '')
                    {
                        var json = JSON.parse(xhr.responseText);
                        window.location = '/Error.php?&error=' + json.StatusMessage;
                    }
                    else
                    {
                        window.location = '/Error.php';
                    }
                    break;
            }
        }
    });
}

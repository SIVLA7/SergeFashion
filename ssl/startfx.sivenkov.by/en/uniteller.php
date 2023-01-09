<?php include_once 'header.php'; ?>
<link rel="stylesheet" href="../common/css/uniteller.css">
<script type="text/javascript">
   var pass = "JRr6mG8GlBOGoH0M0Lj0EeYV8YFzOnMea8rN6iOmxhyX83i8Z5AGWRYfhLvaMWCCy2uiuhMdAujkYTHH";
   var e_currency = 'USD';
   var Shop = {
       EUR: "00013522",
       USD: "00013523",
       RUB: "00013524"
   }
   var SHOP_IDP = Shop[e_currency];
   var URL_RETURN = "http://startfx.com/en/uniteller.html";
</script>
<div class="wrapper container js-scroll-block">
  <div class="row">
    <div class="col-md-12 col-xs-12 col-sm-12 text-center">
      <img src="../common/images/uniteller/logo_uniteller_164x107.png" width="164px" height="107px">
      <div class="title">Instantly account replenishment</div>
    </div>
    <div class="col-lg-4 col-md-12 col-xs-12 col-sm-12 form">
      <form id="form" method="get" action="#" onsubmit="return false;">
        <label>E-mail</label>
        <input type="text" id="Email" name="Email" class="input_text" autofocus required>
        <label>Account number</label>
        <input type="text" id="Order_IDP" name="Order_IDP" class="input_text" required>
        <label>Amount</label>
        <input type="text" id="Subtotal_P" name="Subtotal_P" class="input_text" required>
        <label>Currency</label>
        <select id="Currency" name="Currency" onchange="switchCurrency()">
          <option value="USD" selected>USD</option>
          <option value="EUR">EUR</option>
          <option value="RUB">RUB</option>
        </select>
        <a href="#" class="cover-btn" id="genbtn" type="image" alt="Process Payment" onclick="submitForm(); return false;">Process Payment</a>

        <input type="hidden" name="Shop_IDP" value="" />
        <input type="hidden" name="URL_RETURN" value="" />
        <input type="hidden" name="IData" value="" disabled />
        <input type="hidden" name="Lifetime" value="" />
        <input type="hidden" name="Customer_IDP" value=""  disabled />
        <input type="hidden" name="Signature" value="" />
        <input type="hidden" name="Language" value="en" />
      </form>
    </div>
  </div>
  <div class="row add_footer">
    <div class="col-md-4 col-xs-12 col-sm-12 text-center">
      <img src="../common/images/uniteller/safety_icon_40x50.png" width="50px" height="50px">
      <div>
        <span class="one">Safety</span>
        <span>Certification PCI DSS 3.1</span>
        <span>3D Secure, EMV Level 2 </span>
      </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-12 text-center">
      <img src="../common/images/uniteller/reliability_icon_51x34.png" width="50px" height="50px">
      <div>
        <span class="one">Reliability</span>
        <span>Work cooperation with the largest Banks-acquirers in Russia and abroad</span>
        <span>High conversion of payments</span>
      </div>
    </div>
    <div class="col-md-4 col-xs-12 col-sm-12 text-center">
      <img src="../common/images/uniteller/functionality_icon_48x44.png" width="50px" height="50px">
      <div>
        <span class="one">Functionality</span>
        <span>Simple integration</span>
        <span>10+ payment instruments</span>
      </div>
    </div>
  </div>
</div>
<?php include_once 'footer.php'; ?>
<script>
  function linkCopy() {
   var el = document.getElementById('link');
   if( typeof(el.innerText) != 'undefined' ) CopyToClipboard(el.innerText);
   else CopyToClipboard(el.textContent);
  }
  function copyToClipboard (text) {
    window.prompt ("Ваш браузер не допускает прямой доступ к буферу обмена.\nНажмите:\nCtrl+C - скопировать\nEnter - закрыть это окошко", text);
  }

  function validateForm(form) {
   success = true;
   if( form['Email'].value == '' || form['Order_IDP'].value == '' || form['Subtotal_P'].value == '') { success = false; alert('All fields must be filled');}
   else {
     if( !isValidEmail(form) ) { success = false; alert(
    'Incorrect email address entered'); }
       if( !isValidOrder(form) ) { success = false; alert(
    'Account number can only include digits, Latin letters, spaces and symbols \n.!@#*-+_:()'); }
       if( !isValidSubtotal(form) ) { success = false; alert('To enter the amount, you must use numbers only. As a decimal separator is used dot,\ after which there must necessarily be two digits\N (comma will be automatically replaced by a dot).\ No spaces are not allowed. \ No examples of the correct values: \ N99 \ N999.99 \ N9999'); }
     }
     return success;
  }
  function isValidEmail (form) {
   form['Email'].value = trim(form['Email'].value);
   return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(form['Email'].value);
  }
  function isValidOrder (form) {
   form['Order_IDP'].value = trim(form['Order_IDP'].value);
   return (/^[\.\!\@\#\*\-\+\_\s\(\)\:0-9a-zA-Z]+$/).test(form['Order_IDP'].value);
  }
  function isValidSubtotal (form) {
   form['Subtotal_P'].value = trim(form['Subtotal_P'].value).replace(/\,/, '.');
   return (/^([0-9]+(\.[0-9]{2})?)$/).test(form['Subtotal_P'].value);
  }
  function trim(string) {
   return string.replace(/(^\s+)|(\s+$)/g, '');
  }
  function switchCurrency() {
    e_currency = document.getElementById("Currency").options[document.getElementById("Currency").selectedIndex].value;
    SHOP_IDP   = Shop[e_currency];
  }
  function submitForm() {
   var form = document.getElementById('form');
   if( !validateForm(form) ) return false;
   form['URL_RETURN'].value = URL_RETURN;
   form['Shop_IDP'].value   = SHOP_IDP;
   updateSignature(form);
   var getString = '';
   var elems = form.elements;
   //document.getElementById('copy_btn').style.display = 'none';

   getString += 'https://wpay.uniteller.ru/pay/?';
   var first = true;
      for(var i = 0; i < elems.length; i++) {
       if( (elems[i].type == 'hidden' || elems[i].type == 'text') && elems[i].value != '' && elems[i].name != '') {
         var el = document.getElementById(elems[i].name + '_value');
         if(el != undefined) {
           if(typeof(el.innerText)!='undefined') el.innerText = elems[i].value;
           else el.textContent = elems[i].value;
         }
         if(first) first = false;
         else getString += '&';
         getString += encodeURIComponent(elems[i].name) + '=' + encodeURIComponent(elems[i].value);
      }
   }
   getString += '&Currency='+e_currency;
   //document.getElementById('genbtn').href = getString;
   window.location.href = getString;
   return false;
  }
  function updateSignature(form) {
   a = form.elements;

   // new signature
   a['Signature'].value = MD5(MD5(a['Shop_IDP'].value) + '&' + MD5(a['Order_IDP'].value) + '&' + MD5(a['Subtotal_P'].value) + '&' + MD5("") + '&' + MD5("") + '&' + MD5(a['Lifetime'].value) + '&' + MD5(a['Customer_IDP'].value) + '&' + MD5("") + '&' + MD5(a['IData'].value) + '&' + MD5("") + '&' + MD5(pass)).toUpperCase();

  }

  /**
  *
  *  MD5 (Message-Digest Algorithm)
  *  http://www.webtoolkit.info/
  *
  **/

  var MD5 = function (string) {

   function RotateLeft(lValue, iShiftBits) {
     return (lValue<<iShiftBits) | (lValue>>>(32-iShiftBits));
   }

   function AddUnsigned(lX,lY) {
     var lX4,lY4,lX8,lY8,lResult;
     lX8 = (lX & 0x80000000);
     lY8 = (lY & 0x80000000);
     lX4 = (lX & 0x40000000);
     lY4 = (lY & 0x40000000);
     lResult = (lX & 0x3FFFFFFF)+(lY & 0x3FFFFFFF);
     if (lX4 & lY4) {
       return (lResult ^ 0x80000000 ^ lX8 ^ lY8);
     }
     if (lX4 | lY4) {
       if (lResult & 0x40000000) {
         return (lResult ^ 0xC0000000 ^ lX8 ^ lY8);
       } else {
         return (lResult ^ 0x40000000 ^ lX8 ^ lY8);
       }
     } else {
       return (lResult ^ lX8 ^ lY8);
     }
     }

     function F(x,y,z) { return (x & y) | ((~x) & z); }
     function G(x,y,z) { return (x & z) | (y & (~z)); }
     function H(x,y,z) { return (x ^ y ^ z); }
   function I(x,y,z) { return (y ^ (x | (~z))); }

   function FF(a,b,c,d,x,s,ac) {
     a = AddUnsigned(a, AddUnsigned(AddUnsigned(F(b, c, d), x), ac));
     return AddUnsigned(RotateLeft(a, s), b);
   };

   function GG(a,b,c,d,x,s,ac) {
     a = AddUnsigned(a, AddUnsigned(AddUnsigned(G(b, c, d), x), ac));
     return AddUnsigned(RotateLeft(a, s), b);
   };

   function HH(a,b,c,d,x,s,ac) {
     a = AddUnsigned(a, AddUnsigned(AddUnsigned(H(b, c, d), x), ac));
     return AddUnsigned(RotateLeft(a, s), b);
   };

   function II(a,b,c,d,x,s,ac) {
     a = AddUnsigned(a, AddUnsigned(AddUnsigned(I(b, c, d), x), ac));
     return AddUnsigned(RotateLeft(a, s), b);
   };

   function ConvertToWordArray(string) {
     var lWordCount;
     var lMessageLength = string.length;
     var lNumberOfWords_temp1=lMessageLength + 8;
     var lNumberOfWords_temp2=(lNumberOfWords_temp1-(lNumberOfWords_temp1 % 64))/64;
     var lNumberOfWords = (lNumberOfWords_temp2+1)*16;
     var lWordArray=Array(lNumberOfWords-1);
     var lBytePosition = 0;
     var lByteCount = 0;
     while ( lByteCount < lMessageLength ) {
       lWordCount = (lByteCount-(lByteCount % 4))/4;
       lBytePosition = (lByteCount % 4)*8;
       lWordArray[lWordCount] = (lWordArray[lWordCount] | (string.charCodeAt(lByteCount)<<lBytePosition));
       lByteCount++;
     }
     lWordCount = (lByteCount-(lByteCount % 4))/4;
     lBytePosition = (lByteCount % 4)*8;
     lWordArray[lWordCount] = lWordArray[lWordCount] | (0x80<<lBytePosition);
     lWordArray[lNumberOfWords-2] = lMessageLength<<3;
     lWordArray[lNumberOfWords-1] = lMessageLength>>>29;
     return lWordArray;
   };

   function WordToHex(lValue) {
     var WordToHexValue="",WordToHexValue_temp="",lByte,lCount;
     for (lCount = 0;lCount<=3;lCount++) {
       lByte = (lValue>>>(lCount*8)) & 255;
       WordToHexValue_temp = "0" + lByte.toString(16);
       WordToHexValue = WordToHexValue + WordToHexValue_temp.substr(WordToHexValue_temp.length-2,2);
     }
     return WordToHexValue;
   };

   function Utf8Encode(string) {
     string = string.replace(/\r\n/g,"\n");
     var utftext = "";

     for (var n = 0; n < string.length; n++) {

       var c = string.charCodeAt(n);

       if (c < 128) {
         utftext += String.fromCharCode(c);
       }
       else if((c > 127) && (c < 2048)) {
         utftext += String.fromCharCode((c >> 6) | 192);
         utftext += String.fromCharCode((c & 63) | 128);
       }
       else {
         utftext += String.fromCharCode((c >> 12) | 224);
         utftext += String.fromCharCode(((c >> 6) & 63) | 128);
         utftext += String.fromCharCode((c & 63) | 128);
       }

     }

     return utftext;
   };

   var x=Array();
   var k,AA,BB,CC,DD,a,b,c,d;
   var S11=7, S12=12, S13=17, S14=22;
   var S21=5, S22=9 , S23=14, S24=20;
   var S31=4, S32=11, S33=16, S34=23;
   var S41=6, S42=10, S43=15, S44=21;

   string = Utf8Encode(string);

   x = ConvertToWordArray(string);

   a = 0x67452301; b = 0xEFCDAB89; c = 0x98BADCFE; d = 0x10325476;

   for (k=0;k<x.length;k+=16) {
     AA=a; BB=b; CC=c; DD=d;
     a=FF(a,b,c,d,x[k+0], S11,0xD76AA478);
     d=FF(d,a,b,c,x[k+1], S12,0xE8C7B756);
     c=FF(c,d,a,b,x[k+2], S13,0x242070DB);
     b=FF(b,c,d,a,x[k+3], S14,0xC1BDCEEE);
     a=FF(a,b,c,d,x[k+4], S11,0xF57C0FAF);
     d=FF(d,a,b,c,x[k+5], S12,0x4787C62A);
     c=FF(c,d,a,b,x[k+6], S13,0xA8304613);
     b=FF(b,c,d,a,x[k+7], S14,0xFD469501);
     a=FF(a,b,c,d,x[k+8], S11,0x698098D8);
     d=FF(d,a,b,c,x[k+9], S12,0x8B44F7AF);
     c=FF(c,d,a,b,x[k+10],S13,0xFFFF5BB1);
     b=FF(b,c,d,a,x[k+11],S14,0x895CD7BE);
     a=FF(a,b,c,d,x[k+12],S11,0x6B901122);
     d=FF(d,a,b,c,x[k+13],S12,0xFD987193);
     c=FF(c,d,a,b,x[k+14],S13,0xA679438E);
     b=FF(b,c,d,a,x[k+15],S14,0x49B40821);
     a=GG(a,b,c,d,x[k+1], S21,0xF61E2562);
     d=GG(d,a,b,c,x[k+6], S22,0xC040B340);
     c=GG(c,d,a,b,x[k+11],S23,0x265E5A51);
     b=GG(b,c,d,a,x[k+0], S24,0xE9B6C7AA);
     a=GG(a,b,c,d,x[k+5], S21,0xD62F105D);
     d=GG(d,a,b,c,x[k+10],S22,0x2441453);
     c=GG(c,d,a,b,x[k+15],S23,0xD8A1E681);
     b=GG(b,c,d,a,x[k+4], S24,0xE7D3FBC8);
     a=GG(a,b,c,d,x[k+9], S21,0x21E1CDE6);
     d=GG(d,a,b,c,x[k+14],S22,0xC33707D6);
     c=GG(c,d,a,b,x[k+3], S23,0xF4D50D87);
     b=GG(b,c,d,a,x[k+8], S24,0x455A14ED);
     a=GG(a,b,c,d,x[k+13],S21,0xA9E3E905);
     d=GG(d,a,b,c,x[k+2], S22,0xFCEFA3F8);
     c=GG(c,d,a,b,x[k+7], S23,0x676F02D9);
     b=GG(b,c,d,a,x[k+12],S24,0x8D2A4C8A);
     a=HH(a,b,c,d,x[k+5], S31,0xFFFA3942);
     d=HH(d,a,b,c,x[k+8], S32,0x8771F681);
     c=HH(c,d,a,b,x[k+11],S33,0x6D9D6122);
     b=HH(b,c,d,a,x[k+14],S34,0xFDE5380C);
     a=HH(a,b,c,d,x[k+1], S31,0xA4BEEA44);
     d=HH(d,a,b,c,x[k+4], S32,0x4BDECFA9);
     c=HH(c,d,a,b,x[k+7], S33,0xF6BB4B60);
     b=HH(b,c,d,a,x[k+10],S34,0xBEBFBC70);
     a=HH(a,b,c,d,x[k+13],S31,0x289B7EC6);
     d=HH(d,a,b,c,x[k+0], S32,0xEAA127FA);
     c=HH(c,d,a,b,x[k+3], S33,0xD4EF3085);
     b=HH(b,c,d,a,x[k+6], S34,0x4881D05);
     a=HH(a,b,c,d,x[k+9], S31,0xD9D4D039);
     d=HH(d,a,b,c,x[k+12],S32,0xE6DB99E5);
     c=HH(c,d,a,b,x[k+15],S33,0x1FA27CF8);
     b=HH(b,c,d,a,x[k+2], S34,0xC4AC5665);
     a=II(a,b,c,d,x[k+0], S41,0xF4292244);
     d=II(d,a,b,c,x[k+7], S42,0x432AFF97);
     c=II(c,d,a,b,x[k+14],S43,0xAB9423A7);
     b=II(b,c,d,a,x[k+5], S44,0xFC93A039);
     a=II(a,b,c,d,x[k+12],S41,0x655B59C3);
     d=II(d,a,b,c,x[k+3], S42,0x8F0CCC92);
     c=II(c,d,a,b,x[k+10],S43,0xFFEFF47D);
     b=II(b,c,d,a,x[k+1], S44,0x85845DD1);
     a=II(a,b,c,d,x[k+8], S41,0x6FA87E4F);
     d=II(d,a,b,c,x[k+15],S42,0xFE2CE6E0);
     c=II(c,d,a,b,x[k+6], S43,0xA3014314);
     b=II(b,c,d,a,x[k+13],S44,0x4E0811A1);
     a=II(a,b,c,d,x[k+4], S41,0xF7537E82);
     d=II(d,a,b,c,x[k+11],S42,0xBD3AF235);
     c=II(c,d,a,b,x[k+2], S43,0x2AD7D2BB);
     b=II(b,c,d,a,x[k+9], S44,0xEB86D391);
     a=AddUnsigned(a,AA);
     b=AddUnsigned(b,BB);
     c=AddUnsigned(c,CC);
     d=AddUnsigned(d,DD);
   }

   var temp = WordToHex(a)+WordToHex(b)+WordToHex(c)+WordToHex(d);

   return temp.toLowerCase();
  }

  function CopyToClipboard (textToClipboard) {

   var success = true;
   if (window.clipboardData) { // Internet Explorer
     window.clipboardData.setData ("Text", textToClipboard);
   }
   else {
       // create a temporary element for the execCommand method
     var forExecElement = CreateElementForExecCommand (textToClipboard);

         /* Select the contents of the element
           (the execCommand for 'copy' method works on the selection) */
     SelectContent (forExecElement);

     var supported = true;

       // UniversalXPConnect privilege is required for clipboard access in Firefox
     try {
       if (window.netscape && netscape.security) {
         netscape.security.PrivilegeManager.enablePrivilege ("UniversalXPConnect");
       }

         // Copy the selected content to the clipboard
         // Works in Firefox and in Safari before version 5
       success = document.execCommand ("copy", false, null);
     }
     catch (e) {
       success = false;
     }

       // remove the temporary element
     document.body.removeChild (forExecElement);
   }

   if (!success) {
     copyToClipboard(textToClipboard);
   }
  }

  function CreateElementForExecCommand (textToClipboard) {
   var forExecElement = document.createElement ("div");
     // place outside the visible area
   forExecElement.style.position = "absolute";
   forExecElement.style.left = "-10000px";
   forExecElement.style.top = "-10000px";
     // write the necessary text into the element and append to the document
   forExecElement.textContent = textToClipboard;
   document.body.appendChild (forExecElement);
     // the contentEditable mode is necessary for the  execCommand method in Firefox
   forExecElement.contentEditable = true;

   return forExecElement;
  }

  function SelectContent (element) {
     // first create a range
   var rangeToSelect = document.createRange ();
   rangeToSelect.selectNodeContents (element);

     // select the contents
   var selection = window.getSelection ();
   selection.removeAllRanges ();
   selection.addRange (rangeToSelect);
  }
  var f=!0;document.write('<style type="text/css">input.styled { display: none; } select.styled { position: relative; width: 340px; opacity: 0; filter: alpha(opacity=0); z-index: 5; } .disabled { opacity: 0.5; filter: alpha(opacity=50); }</style>');function i(){element=this.nextSibling;this.style.backgroundPosition=element.checked==f&&"checkbox"==element.type?"0 -108px":element.checked==f&&"radio"==element.type?"0 -108px":"0 -36px"}
  function j(){element=this.nextSibling;if(element.checked==f&&"checkbox"==element.type)this.style.backgroundPosition="0 0",element.checked=!1;else{if("checkbox"==element.type)this.style.backgroundPosition="0 -72px";else{this.style.backgroundPosition="0 -72px";group=this.nextSibling.name;inputs=document.getElementsByTagName("input");for(a=0;a<inputs.length;a++)inputs[a].name==group&&inputs[a]!=this.nextSibling&&(inputs[a].previousSibling.style.backgroundPosition="0 0")}element.checked=f}}
  function k(){inputs=document.getElementsByTagName("input");for(var c=0;c<inputs.length;c++)"checkbox"==inputs[c].type&&inputs[c].checked==f&&"styled"==inputs[c].className?inputs[c].previousSibling.style.backgroundPosition="0 -72px":"checkbox"==inputs[c].type&&"styled"==inputs[c].className?inputs[c].previousSibling.style.backgroundPosition="0 0":"radio"==inputs[c].type&&inputs[c].checked==f&&"styled"==inputs[c].className?inputs[c].previousSibling.style.backgroundPosition="0 -72px":"radio"==inputs[c].type&&
  "styled"==inputs[c].className&&(inputs[c].previousSibling.style.backgroundPosition="0 0")}function l(){option=this.getElementsByTagName("option");for(d=0;d<option.length;d++)option[d].selected==f&&(document.getElementById("select"+this.name).childNodes[0].nodeValue=option[d].childNodes[0].nodeValue)}
  window.onload=function(){var c=document.getElementsByTagName("input"),e=[],g,h;for(a=0;a<c.length;a++)if(("checkbox"==c[a].type||"radio"==c[a].type)&&"styled"==c[a].className)(e[a]=document.createElement("span"),e[a].className=c[a].type,c[a].checked==f&&(position="0 -72px",e[a].style.backgroundPosition=position),c[a].parentNode.insertBefore(e[a],c[a]),c[a].onchange=k,c[a].getAttribute("disabled"))?e[a].className=e[a].className+=" disabled":(e[a].onmousedown=i,e[a].onmouseup=j);c=document.getElementsByTagName("select");
  for(a=0;a<c.length;a++)if("styled"==c[a].className){h=c[a].getElementsByTagName("option");g=h[0].childNodes[0].nodeValue;g=document.createTextNode(g);for(b=0;b<h.length;b++)h[b].selected==f&&(g=document.createTextNode(h[b].childNodes[0].nodeValue));e[a]=document.createElement("span");e[a].className="select";e[a].id="select"+c[a].name;e[a].appendChild(g);c[a].parentNode.insertBefore(e[a],c[a]);c[a].getAttribute("disabled")?c[a].previousSibling.className=c[a].previousSibling.className+=" disabled":
  c[a].onchange=l}document.onmouseup=k};
</script>

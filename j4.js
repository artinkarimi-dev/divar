


  let generatedCode = null;

  document.getElementById("submitBtn").addEventListener("click", function () {
    const phone = document.getElementById("in1").value.trim();
    const regex = /^09\d{9}$/;

    if (regex.test(phone)) {
   
      generatedCode = Math.floor(Math.random() * (99999 - 90000 + 1)) + 90000;

     
      alert("کد تأیید شما: " + generatedCode);

     
      const sms = document.getElementById("smsSection");
      sms.style.display = "block";
      sms.style.opacity = 0;
      setTimeout(() => {
        sms.style.opacity = 1;
      }, 50);


      if (!document.getElementById("verifyBtn")) {
        const btn = document.createElement("button");
        btn.textContent = "ورود";
        btn.className = "btn btn-success w-100 mt-3";
        btn.id = "verifyBtn";
        btn.addEventListener("click", function () {
          const enteredCode = document.getElementById("verifyCodeInput").value.trim();
          if (enteredCode === generatedCode.toString()) {
        
            document.getElementById("successMessage").style.display = "block";

          
            setTimeout(() => {
              window.location.href = "agahi.html";
            }, 2000);
          } else {
            alert(" .کد وارد شده شما نادرست است ");
          }
        });
        document.getElementById("smsSection").appendChild(btn);
      }

    } else {
      alert("شماره موبایل معتبر وارد کنید! مثل: 09123456789");
    }
  });


  document.getElementById("in1").addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, "").slice(0, 11);
  });

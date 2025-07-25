
<?php
$db = mysqli_connect('localhost', 'root', '', 'divar');
if (!$db) {
    die("اتصال به دیتابیس برقرار نشد: " . mysqli_connect_error());
}

$sql = "SELECT * FROM sabtnam ORDER BY created_at DESC";

$result = mysqli_query($db, $sql);

if (!$result) {
    die("خطا در اجرای کوئری: " . mysqli_error($db));
}
?>


<!DOCTYPE html>
<html>

  <head>

  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" href="fontawesome/webfonts/fa-duotone-900.woff2">


  <link rel="stylesheet" href="style.css">

  </head>

  <body>
    
 <div class="div_col">


 <div class="div_header">

  <div class="head_btn"> <button
  type="button"
  class="btn_red btn btn-danger"
  data-toggle="modal"
  data-target="#exampleModalCenter"
>
  ثبت آگهی
</button> </div>




<div
  class="modal fade"
  id="exampleModalCenter"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-dark text-white rounded shadow-lg">

 <div id="successMessage" style="display: none; text-align: center; margin-top: 20px;">
  <h5 style="color: #38bb56;">ثبت‌نام شما با موفقیت انجام شد</h5>
</div>

<br>


  
      <div class="modal-header d-flex flex-row-reverse align-items-center">
        <button
          type="button"
          class="close text-white ml-auto"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title mr-2" id="exampleModalCenterTitle" style="direction: rtl;">
          ورود به حساب کاربری
        </h5>
      </div>

    
      <div class="modal-body" style="direction: ltr;">
        <p class="font-weight-bold mb-2">شماره موبایل خود را وارد کنید</p>
        <p class="text-muted small mb-3">
          قبل از ثبت آگهی، لطفاً وارد حساب خود شوید.
          <br>
          کد تأیید به این شماره پیامک می‌شود.
        </p>

     
        <div class="input-group mb-3" dir="ltr">
          <div class="input-group-prepend">
            <span class="input-group-text">+98</span>
          </div>
          <input
            type="tel"
            class="form-control"
            placeholder="9123456789"
            dir="ltr"
            id="in1"
            maxlength="11"
          >
        </div>

      
        <button type="button" class="btn btn-danger w-100" id="submitBtn">
          تأیید
        </button>

     
        <p class="mt-3 small text-center text-muted">
          با ورود و ثبت‌نام، شما
          <span class="text-danger">شرایط استفاده از خدمات</span>
          و
          <span class="text-danger">حریم خصوصی</span>
          دیوار را می‌پذیرید.
        </p>

     
        <div id="smsSection" style="display: none; transition: all 0.4s ease;">
          <label class="mt-3">: کد تایید را وارد کنید  </label>
          <input
           type="text"
  class="form-control text-left"
  placeholder="کد ۵ رقمی"
  dir="ltr"
  id="verifyCodeInput"
  style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); padding: 6px;"
          >
        </div>
      </div>
    </div>
  </div>
</div>








 <div class="div_btn">

  <a href="poshtibani.html">  
    
<button class="btn1"> پشتیبانی 
  
<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>

</button>   

  </a>


 &nbsp; &nbsp;

 <a href="chat.html">  

 <button class="btn1"> چت و تماس 
  
<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M64 0C28.7 0 0 28.7 0 64L0 352c0 35.3 28.7 64 64 64l96 0 0 80c0 6.1 3.4 11.6 8.8 14.3s11.9 2.1 16.8-1.5L309.3 416 448 416c35.3 0 64-28.7 64-64l0-288c0-35.3-28.7-64-64-64L64 0z"/></svg>

</button>

 </a>

&nbsp; &nbsp;


 <button class="btn2"> دیوار من   
  
<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>

</button>


&nbsp; &nbsp;


 <button class="btn2">  دستیار خرید   
  
<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>

</button>



 <div class="div_input_dark">  
  
 <div style="position: relative; width: fit-content; direction: rtl;">
  <input 
    type="text" 
    placeholder="جستجو در همة آگهی ها" 
    style="
      width: 440px;
      height: 48px;
      padding: 0 15px 0 45px;
      border: none;
      border-radius: 6px 6px 6px 6px;
      background-color: #3a3636;
      font-family: 'Yekan', 'Segoe UI', sans-serif;
      font-size: 15px;
      color: #ffffff;
      outline: none;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      text-align: right;
    "
  >
  <div style="
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: 24px;
    height: 24px;
    /* background-color: #555; */
   
  ">  <svg class="my-icon_in" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>  </div>
</div>

</div>



 <button class="btn3">   تهران   
  
<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"> <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>

</button>

<img class="img" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik04LjM4NiAxNC42MTdIOC4yOGEuNzEyLjcxMiAwIDAgMS0uNTk1LS44MDZjLjQ3My0zLjExNy42My04LjA5Mi42My04LjEyNy4wMzUtLjM4Ni4zMzMtLjcuNzM2LS42ODNhLjcxNS43MTUgMCAwIDEgLjY4My43MThjMCAuMjEtLjE3NSA1LjA5Ny0uNjQ4IDguMzAzYS43LjcgMCAwIDEtLjcuNTk1Wm0xMC4wMzcgMS4yOTZhLjY5My42OTMgMCAwIDEtLjY2Ni0uNDkuNjg2LjY4NiAwIDAgMSAuNDU1LS44NzZjMy4zMS0xLjA1IDMuMzYzLTEuODU3IDMuMzgxLTIuMjk1LjAzNS0uNjgzLS40OS0xLjU1OC0uNy0xLjg1NmEuNzAyLjcwMiAwIDEgMSAxLjEzOC0uODI0Yy4xMDUuMTQgMS4wNSAxLjQ1NC45NjMgMi43NjgtLjA4NyAxLjU5NC0xLjMxNCAyLjU3NS00LjM2MSAzLjU1NmEuODc4Ljg3OCAwIDAgMC0uMTA1LjAxLjkyOC45MjggMCAwIDEtLjEwNS4wMDdabS05LjUxMiAyLjQ3YS42NTUuNjU1IDAgMCAxLS41NDMtLjI2Mi42ODMuNjgzIDAgMCAxIC4xMjMtLjk4YzEuNDM2LTEuMTQgMi40LTIuMTU2IDMuMDMtMy4wNDktLjM1LS4xNzUtLjcxOC0uNDM4LS45MS0uODc2LS4xNzYtLjQwMy0uMjgxLTEuMDY5LjMzMi0xLjk2Mi44NzYtMS4yOTYgMS43NTItMS41OTQgMi4wODQtMS42NjRhLjg3Ljg3IDAgMCAxIDEuMDE2LjYxM2MuMDg4LjMxNS4yOTggMS4zMTQtLjMzMiAyLjgzOC44NC0uMDE4IDEuNTA2LS4yNDUgMi4wMTQtLjY2Ni45OC0uNzg4IDEuMDMzLTIuMTIgMS4wMzMtMi4xMzdhLjcxNS43MTUgMCAwIDEgLjcxOS0uNjgzLjcxNS43MTUgMCAwIDEgLjY4My43MThjMCAuMDctLjA3IDEuOTQ0LTEuNTI0IDMuMTctLjkxMS43NzEtMi4xNTUgMS4xMDQtMy42NjEuOTgyLS43MTggMS4xMDMtMS44NTcgMi40LTMuNjI2IDMuOGEuNzA3LjcwNyAwIDAgMS0uNDM4LjE1OFptMy44MDEtNy4wNzZjLS4yNDcuMjExLS40Ni40NTktLjYzLjczNS0uMjI4LjM1LS4yNDYuNTQzLS4yMjguNTk2LjAzNS4wODguMjEuMTc1LjM4NS4yNDUuMzMzLS42NjUuNDM4LTEuMTkuNDczLTEuNTc2Wm0uMTc1IDQuOTIyYS43MS43MSAwIDAgMCAuNy42ODNoLjAzNmMuMDUzIDAgMS4yMjYtLjAzNSAyLjkwOC0uNDJhLjcuNyAwIDAgMCAuNTQzLS44NC43MDMuNzAzIDAgMCAwLS44NDEtLjU0NGMtMS41Ni4zMzItMi42NjMuMzg1LTIuNjguMzg1YS43MDQuNzA0IDAgMCAwLS42NjYuNzM2Wk0xLjEzNCAxOC4xMDNjLjEyMi4xNzUuMzUuMjguNTYuMjguMTQgMCAuMjgtLjAzNS40Mi0uMTIyIDQuNDUtMy4yNCA0LjYyNS03LjQ4IDQuNjI1LTcuNjU1IDAtLjM4NS0uMjk4LS43LS42ODMtLjcxOC0uMzg2LS4wMTgtLjcuMjk4LS43MTguNjgzIDAgLjE0LS4xNzYgMy43MzEtNC4wNDcgNi41NTFhLjcwMi43MDIgMCAwIDAtLjE1Ny45ODFaIiBmaWxsPSIjRDgzOTM5Ii8+PC9zdmc+" alt="">



</div>


 </div>


 <hr style="color: white; border: 1.5px solid rgba(128, 128, 128, 0.69); ">


 </div>



 <div class="col_continer">
 

 <div class="continer_left">

 <p class="p_text1">  انواع آگهی‌ها و نیازمندی های تهران  </p>
<br>  
 
 




    <div class="col_agahi2">
<?php while($row = mysqli_fetch_assoc($result)): ?>
  <div class="div_agahi">
    <div class="agahi">
      <img class="img_agahi" src="<?php echo htmlspecialchars($row['img']); ?>" alt="img">
      <div class="moshakhasat">
        <div class="text_mahsol"><?php echo htmlspecialchars($row['name']); ?></div> <br>
         <div class="text_mahsol"><?php echo htmlspecialchars($row['price']); ?></div> <br>
        <div class="text_juzeeat">
          <span><?php echo nl2br(htmlspecialchars($row['description'])); ?></span><br><br>
          <span style="color: rgba(255, 255, 255, 0.427); margin-top: 8%; display: block;">
            آگهی ثبت‌شده توسط کاربر
          </span>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
</div>







    



  </div>

 


 <div class="continer_rigth">

 <h6 style="text-align: right;"> دسته ها </h6>

 <br>

 <label class="lbl"> املاک 

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"> <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>

 </label>


 <br><br>

 <label class="lbl"> وسایل نقلیه 

  <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> کالای دیجیتال 

<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"> <path d="M16 64C16 28.7 44.7 0 80 0L304 0c35.3 0 64 28.7 64 64l0 384c0 35.3-28.7 64-64 64L80 512c-35.3 0-64-28.7-64-64L16 64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64L80 64l0 320 224 0 0-320z"/></svg>

 </label>




 <br><br>

 <label class="lbl"> خانه و آشپزخانه 

<svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"> <path d="M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112l71.8 0c8.8-9.8 21.6-16 35.8-16l104 0c26.5 0 48 21.5 48 48s-21.5 48-48 48l-104 0c-14.2 0-27-6.2-35.8-16l-71.8 0zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24l0 8 96 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-240 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l96 0 0-8c0-13.3 10.7-24 24-24zM288 464l0-112 224 0 0 112c0 26.5-21.5 48-48 48l-128 0c-26.5 0-48-21.5-48-48zM48 320l80 0 16 0 32 0c26.5 0 48 21.5 48 48s-21.5 48-48 48l-16 0c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-80c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16l-16 0 0 32 16 0zM24 464l176 0c13.3 0 24 10.7 24 24s-10.7 24-24 24L24 512c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> خدمات 

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"> <path d="M566.6 9.4c12.5 12.5 12.5 32.8 0 45.3l-192 192 34.7 34.7c4.2 4.2 6.6 10 6.6 16c0 12.5-10.1 22.6-22.6 22.6l-29.1 0L256 211.7l0-29.1c0-12.5 10.1-22.6 22.6-22.6c6 0 11.8 2.4 16 6.6l34.7 34.7 192-192c12.5-12.5 32.8-12.5 45.3 0zm-344 225.5L341.1 353.4c3.7 42.7-11.7 85.2-42.3 115.8C271.4 496.6 234.2 512 195.5 512L22.1 512C9.9 512 0 502.1 0 489.9c0-6.3 2.7-12.3 7.3-16.5L133.7 359.7c4.2-3.7-.4-10.4-5.4-7.9L77.2 377.4c-6.1 3-13.2-1.4-13.2-8.2c0-31.5 12.5-61.7 34.8-84l8-8c30.6-30.6 73.1-45.9 115.8-42.3zM464 352a80 80 0 1 1 0 160 80 80 0 1 1 0-160z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> وسایل شخصی  

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"> <path d="M118.6 80c-11.5 0-21.4 7.9-24 19.1L57 260.3c20.5-6.2 48.3-12.3 78.7-12.3c32.3 0 61.8 6.9 82.8 13.5c10.6 3.3 19.3 6.7 25.4 9.2c3.1 1.3 5.5 2.4 7.3 3.2c.9 .4 1.6 .7 2.1 1l.6 .3 .2 .1c0 0 .1 0 .1 0c0 0 0 0 0 0s0 0 0 0L247.9 288s0 0 0 0l6.3-12.7c5.8 2.9 10.4 7.3 13.5 12.7l40.6 0c3.1-5.3 7.7-9.8 13.5-12.7l6.3 12.7s0 0 0 0c-6.3-12.7-6.3-12.7-6.3-12.7s0 0 0 0s0 0 0 0c0 0 .1 0 .1 0l.2-.1 .6-.3c.5-.2 1.2-.6 2.1-1c1.8-.8 4.2-1.9 7.3-3.2c6.1-2.6 14.8-5.9 25.4-9.2c21-6.6 50.4-13.5 82.8-13.5c30.4 0 58.2 6.1 78.7 12.3L481.4 99.1c-2.6-11.2-12.6-19.1-24-19.1c-3.1 0-6.2 .6-9.2 1.8L416.9 94.3c-12.3 4.9-26.3-1.1-31.2-13.4s1.1-26.3 13.4-31.2l31.3-12.5c8.6-3.4 17.7-5.2 27-5.2c33.8 0 63.1 23.3 70.8 56.2l43.9 188c1.7 7.3 2.9 14.7 3.5 22.1c.3 1.9 .5 3.8 .5 5.7l0 6.7 0 41.3 0 16c0 61.9-50.1 112-112 112l-44.3 0c-59.4 0-108.5-46.4-111.8-105.8L306.6 352l-37.2 0-1.2 22.2C264.9 433.6 215.8 480 156.3 480L112 480C50.1 480 0 429.9 0 368l0-16 0-41.3L0 304c0-1.9 .2-3.8 .5-5.7c.6-7.4 1.8-14.8 3.5-22.1l43.9-188C55.5 55.3 84.8 32 118.6 32c9.2 0 18.4 1.8 27 5.2l31.3 12.5c12.3 4.9 18.3 18.9 13.4 31.2s-18.9 18.3-31.2 13.4L127.8 81.8c-2.9-1.2-6-1.8-9.2-1.8zM64 325.4L64 368c0 26.5 21.5 48 48 48l44.3 0c25.5 0 46.5-19.9 47.9-45.3l2.5-45.6c-2.3-.8-4.9-1.7-7.5-2.5c-17.2-5.4-39.9-10.5-63.6-10.5c-23.7 0-46.2 5.1-63.2 10.5c-3.1 1-5.9 1.9-8.5 2.9zM512 368l0-42.6c-2.6-.9-5.5-1.9-8.5-2.9c-17-5.4-39.5-10.5-63.2-10.5c-23.7 0-46.4 5.1-63.6 10.5c-2.7 .8-5.2 1.7-7.5 2.5l2.5 45.6c1.4 25.4 22.5 45.3 47.9 45.3l44.3 0c26.5 0 48-21.5 48-48z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> سرگرمی و فراغت 

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"> <path d="M192 64C86 64 0 150 0 256S86 448 192 448l256 0c106 0 192-86 192-192s-86-192-192-192L192 64zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24l0 32 32 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-32 0 0 32c0 13.3-10.7 24-24 24s-24-10.7-24-24l0-32-32 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l32 0 0-32z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> اجتماعی 

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"> <path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3l0-84.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5l0 21.5c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-26.8C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112l32 0c24 0 46.2 7.5 64.4 20.3zM448 416l0-21.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176l32 0c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2l0 26.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3l0-84.7c-10 11.3-16 26.1-16 42.3zm144-42.3l0 84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2l0 42.8c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-42.8c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112l32 0c61.9 0 112 50.1 112 112z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> تجهیزات و صنعتی 

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"> <path d="M192 0C139 0 96 43 96 96l0 160c0 53 43 96 96 96s96-43 96-96l0-160c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 89.1 66.2 162.7 152 174.4l0 33.6-48 0c-13.3 0-24 10.7-24 24s10.7 24 24 24l72 0 72 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-48 0 0-33.6c85.8-11.7 152-85.3 152-174.4l0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40z"/></svg>

 </label>



 <br><br>

 <label class="lbl"> استخدام و کاریابی 

 <svg class="my-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"> <path d="M48 0C21.5 0 0 21.5 0 48L0 464c0 26.5 21.5 48 48 48l96 0 0-80c0-26.5 21.5-48 48-48s48 21.5 48 48l0 80 96 0c26.5 0 48-21.5 48-48l0-416c0-26.5-21.5-48-48-48L48 0zM64 240c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zm112-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM80 96l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32zM272 96l32 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16z"/></svg>

 </label>





 </div>



 </div>



 
 <br>

 
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>



  </body>


  <script src="j4.js"></script>






</html>
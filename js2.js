

  const input = document.querySelector('.in2');
  const btn = document.querySelector('.btn-primary');
  const chatMessages = document.querySelector('.chat-messages');

  function getBotReply(msg) {
    msg = msg.toLowerCase();
    if (msg.includes('سلام') || msg.includes('درود')) {
      return 'سلام! چطور میتونم به شما کمک کنم؟';
    } else if (msg.includes('خوبی') || msg.includes('چطوری')) {
      return 'خوبم رفیق، تو چی؟';
    } else if (msg.includes('تو کی هستی') || msg.includes('تو چی')) {
      return 'من یک هوش مصنوعی هستم ساخته شدم تا سوالات شمارا جواب بدم';
    } else if (msg.includes('کمک') || msg.includes('سوال؟') || msg.includes('سوال')) {
      return 'بله! هرسوالی درباره سایت باشد را من میتوانم جواب بدم و کمکتون کنم';
    } else if (msg.includes('حالت چطوره') || msg.includes('چخبر') || msg.includes('چه خبر')) {
      return 'فدات شم، میگذرونیم. تو چطوری؟';
    } else if (msg.includes('فداتشم') || msg.includes('قربونت')) {
      return 'ممنون رفیق ! سوالی داری ؟';
    } else if (msg.includes('چجوری آگهی ثبت کنم') || msg.includes('چگونه اگهی ثبت کنم؟') || msg.includes('چگونه اگهی ثبت کنم')) {
      return 'شما با استفاده از منو باید برید قسمت ثبت اگهی و اگهی خود را ثبت کنید';
    } else if (msg.includes('منم خوبم') || msg.includes('خوبم') || msg.includes('خوبم مرسی')) {
      return 'خدارشکر آیاسوالی دارید؟';
    } else if (msg.includes('این سایت برای چی ساخته شده') || msg.includes('این سایت چرا ساخته شده')) {
      return 'خب راستش ارتین این سایت رو طراحی کرده برای تمرین و اموزشش ایا سوال دیگه ای دارید؟';
    } else if (msg.includes('خوبم تو چطوری') || msg.includes('حالت خوبه؟')) {
      return 'فدات شم، من عالی‌ام رفیق.';
    } else if (msg.includes('چجوری برم قسمت چت و تماس') || msg.includes('چگونه برم قسمت چت و تماس')) {
      return 'اول برید قسمت دیوار من از منو و توی منو برید قسمت چت و تماس و با هوش مصنوعی حرف بزنید';
    } else if (msg.includes('اسمت چیه') || msg.includes('اسم تو چیه')) {
      return 'راستش من اسم ندارم یا برام درست نکردن';
    } else if (msg.includes('چگونه برم سمت پشتیبانی') || msg.includes('چجوری برم قسمت پشتیبانی')) {
      return 'از منو قسمت پشتیبانی هست ایا سوال دیگه ای دارید؟';
    } else if (msg.includes('چه کار میکنی') || msg.includes('چیکار میکنی')) {
      return 'دارم منتظرم تو پیام بدی که جواب بدم :)';
    } else if (msg.includes('خیلی سایت خوبی شده') || msg.includes('خیلی سایت خفنی شده')) {
      return 'فداتشم قربان این سایت رو ارتین کریمی طراحی کرده است';
    } else if (msg.includes('این سایت با چه زبان هایی ساخته شده است') || msg.includes('این سایت چجوری ساخته شده است')) {
      return 'این سایت با زبان های js , php , html , css و از فرمورک هایی مثل بوت استرپ ساخته شده است';
    } else if (msg.includes('چجوری برنامه نویسی کنم') || msg.includes('برنامه نویسی')) {
    }
    return 'این سوالت رو متوجه نشدم، لطفا یه چیز دیگه بپرس!';
  }

  function addMessage(text, sender = 'user') {
    const div = document.createElement('div');
    div.classList.add('mb-2');
    if (sender === 'user') {
      div.classList.add('text-end');
      div.innerHTML = `<span class="badge bg-primary">${text}</span>`;
    } else {
      div.classList.add('text-start');
      div.innerHTML = `<span class="badge bg-secondary">${text}</span>`;
    }
    chatMessages.appendChild(div);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  btn.addEventListener('click', () => {
    const message = input.value.trim();
    if (!message) return;
    addMessage(message, 'user');
    input.value = '';
    const reply = getBotReply(message);
    setTimeout(() => addMessage(reply, 'bot'), 500);
  });

  input.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      btn.click();
    }
  });
  
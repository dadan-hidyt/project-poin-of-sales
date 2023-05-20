const timerDisplay = document.querySelector('.timer__part')
      cardHeader = document.querySelector('.card-head__kitchen')
      prosessBtn = document.querySelector('.btn-prosess__kitchen')
      doneBtn = document.querySelector('.btn-done__kitchen');
let setTimer = 900;

timerDisplay.innerHTML = `00:${setTimer}`;

displayTime(setTimer);


const countDown = setInterval (() => {
    setTimer--;
    timerDisplay.innerHTML = `00:${setTimer}`;

    displayTime(setTimer);

    
    if(setTimer <= 300 && setTimer > 120 )
    {
        cardHeader.classList.add('bg-warning');
    }
    if(setTimer <=  120 && setTimer > 1 )
    {
        cardHeader.classList.remove('bg-warning');
        cardHeader.classList.add('bg-danger');
        cardHeader.classList.add('text-white');
    }


    if ( setTimer <= 0 || setTimer < 1)
    {
        // endTime();
        cardHeader.classList.add('bg-light');
        cardHeader.classList.remove('text-white');
        clearInterval(countDown);

    }

}, 1000);


function displayTime(second)
{
    const minute = Math.floor(second / 60) ;
    const sec = Math.floor( second % 60 );

    timerDisplay.innerHTML = `${minute<10 ? '0' : ''}${minute} : ${sec<10 ? '0' : ''}${sec}`;
}


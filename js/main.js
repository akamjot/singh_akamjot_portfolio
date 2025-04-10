(() => {



   
    const playerCon = document.querySelector('#player-container');
    const player = document.querySelector('video');
    const videoControls = document.querySelector('#video-controls');
    const playButton = document.querySelector('#play-button');
    const pauseButton = document.querySelector('#pause-button');
    const stopButton = document.querySelector('#stop-button');
    const volumeSlider = document.querySelector("#change-vol");
    const fullScreen = document.querySelector("#full-screen");
    
    
   
    player.controls = false;
    videoControls.classList.remove('hidden');
    
    
  
    function playVideo() {
        player.play();
    }
    
    function pauseVideo() {
        player.pause();
    }
    
    function stopVideo() {
        player.pause();
        player.currentTime = 1;
    }
    
    function changeVolume() {
        player.volume = volumeSlider.value;
    }
    
    // toggleFullScreen toggles the full screen state of the video
    // If the browser is currently in fullscreen mode,
    // then it should exit and vice versa.
    function toggleFullScreen() {
        if (document.fullscreenElement) {
          document.exitFullscreen();
        } else if (document.webkitFullscreenElement) {
          // Need this to support Safari
          document.webkitExitFullscreen();
        } else if (playerCon.webkitRequestFullscreen) {
          // Need this to support Safari
            playerCon.webkitRequestFullscreen();
        } else {
            playerCon.requestFullscreen();
        }
    }
    
    // hideControls hides the video controls when not in use
    // if the video is paused, the controls must remain visible
    function hideControls() {
        if (player.paused) {
          return;
        } 
        videoControls.classList.add('hide');
      }
      
      // showControls displays the video controls
      function showControls() {
        videoControls.classList.remove('hide');
      }
    
    playButton.addEventListener("click", playVideo);
    pauseButton.addEventListener("click", pauseVideo);
    stopButton.addEventListener("click", stopVideo);
    volumeSlider.addEventListener("change", changeVolume);
    
    fullScreen.addEventListener("click", toggleFullScreen);
    videoControls.addEventListener('mouseenter', showControls);
    videoControls.addEventListener('mouseleave', hideControls);
    player.addEventListener('mouseenter', showControls);
    player.addEventListener('mouseleave', hideControls);
    
// Animations

window.addEventListener('DOMContentLoaded', () => {
  gsap.registerPlugin(ScrollTrigger);

  const paragraphs = document.querySelectorAll('.project-info p,  .intro p, .intro h2, .intro h1');

  const headers = document.querySelectorAll('.sticky-nav-con');

  const headings = document.querySelectorAll('.heading h2');


  paragraphs.forEach((paragraph) => {
    gsap.from(paragraph, {
      duration: 1,
      x: 200,
      autoAlpha: 0,
      ease: 'power2.out',
      scrollTrigger: {
        trigger: paragraph,
        start: 'top 80%',
        end: 'top 20%',
        toggleActions: 'play none none none',
      }
    });
  });

  headers.forEach((header) => {
      gsap.from(header, {
        duration: 1,
        y: 200,
        autoAlpha: 0,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: image,
          start: 'top 80%',
          end: 'top 20%',
          toggleActions: 'play none none none',
        }
      });
    });

    headings.forEach((heading) => {
      gsap.from(heading, {
        duration: 1,
        y: 200,
        autoAlpha: 0,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: image,
          start: 'top 80%',
          end: 'top 20%',
          toggleActions: 'play none none none',
        }
      });
    });
});


document.addEventListener("DOMContentLoaded", () => {
  // your video player code...
  // your GSAP animations...
  // and your form handler:
  const form = document.querySelector("#Contactform");
  const feedback = document.querySelector("#feedback");

  if (!form || !feedback) {
    console.log("Form or feedback not found!");
    return;
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const formdata = new URLSearchParams();
    formdata.append("last_name", form.elements.last_name.value);
    formdata.append("first_name", form.elements.first_name.value);
    formdata.append("email", form.elements.email.value);
    formdata.append("comments", form.elements.comments.value);

    fetch("includes/sendmail.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: formdata
    })
      .then((res) => res.json())
      .then((res) => {
        feedback.innerHTML = "";

        if (res.errors) {
          res.errors.forEach((err) => {
            const el = document.createElement("p");
            el.textContent = err;
            el.style.color = "red";
            feedback.appendChild(el);
          });
        } else {
          const success = document.createElement("p");
          success.textContent = res.message;
          success.style.color = "green";
          feedback.appendChild(success);
          form.reset();
        }

        feedback.scrollIntoView({ behavior: "smooth", block: "center" });
      })
      .catch((err) => {
        console.log(err);
        feedback.innerHTML = "<p style='color: red;'>Something went wrong.</p>";
      });
  });
});







})();
   

(() => {
  $(document).ready(function () {
    var canScroll = true,
      scrollController = null;
    $(this).on("mousewheel DOMMouseScroll", function (e) {
      e.preventDefault();

      var windowWidth = window.innerWidth;
      if (windowWidth > 967) {
        var delta = e.originalEvent.wheelDelta
          ? -e.originalEvent.wheelDelta
          : e.originalEvent.detail * 20;

        if (delta > 50 && canScroll) {
          canScroll = false;
          clearTimeout(scrollController);
          scrollController = setTimeout(function () {
            canScroll = true;
          }, 800);
          updateHelper(1);
        } else if (delta < -50 && canScroll) {
          canScroll = false;
          clearTimeout(scrollController);
          scrollController = setTimeout(function () {
            canScroll = true;
          }, 800);
          updateHelper(-1);
        }
      }
    });

    function updateHelper(param) {
      var curActive = $("nav > ul").find(".is-active"),
        curPos = $("nav > ul").children().index(curActive),
        lastItem = $("nav > ul").children().length - 1,
        nextPos = 0;

      if (param.type === "swipeup" || param.keyCode === 40 || param > 0) {
        if (curPos !== lastItem) {
          nextPos = curPos + 1;
          updateNavs(nextPos);
          updateContent(curPos, nextPos, lastItem);
        } else {
          updateNavs(nextPos);
          updateContent(curPos, nextPos, lastItem);
        }
      } else if (
        param.type === "swipedown" ||
        param.keyCode === 38 ||
        param < 0
      ) {
        if (curPos !== 0) {
          nextPos = curPos - 1;
          updateNavs(nextPos);
          updateContent(curPos, nextPos, lastItem);
        } else {
          nextPos = lastItem;
          updateNavs(nextPos);
          updateContent(curPos, nextPos, lastItem);
        }
      }
    }

    $("nav > ul > li").click(function () {
      if (!$(this).hasClass("is-active")) {
        var $this = $(this),
          curActive = $this.parent().find(".is-active"),
          curPos = $this.parent().children().index(curActive),
          nextPos = $this.parent().children().index($this),
          lastItem = $(this).parent().children().length - 1;

        updateNavs(nextPos);
        updateContent(curPos, nextPos, lastItem);
      }
    });

    // sync side and outer navigations
    function updateNavs(nextPos) {
      $("nav > ul").children().removeClass("is-active");
      $("nav > ul").children().eq(nextPos).addClass("is-active");
      $("").children().eq(nextPos).addClass("is-active");
    }

    // update main content area
    function updateContent(curPos, nextPos, lastItem) {
      $("main").children().removeClass("section--is-active");
      $("main").children().eq(nextPos).addClass("section--is-active");
      $("main .section").children().removeClass("section--next section--prev");

      if (
        (curPos === lastItem && nextPos === 0) ||
        (curPos === 0 && nextPos === lastItem)
      ) {
        $("main .section")
          .children()
          .removeClass("section--next section--prev");
      } else if (curPos < nextPos) {
        $("main").children().eq(curPos).children().addClass("section--next");
      } else {
        $("main").children().eq(curPos).children().addClass("section--prev");
      }

      if (nextPos !== 0 && nextPos !== lastItem) {
        $(".header--cta").addClass("is-active");
      } else {
        $(".header--cta").removeClass("is-active");
      }
    }

    function workSlider() {
      $(".slider--prev, .slider--next").click(function () {
        var $this = $(this),
          curLeft = $(".slider").find(".slider--item-left"),
          curLeftPos = $(".slider").children().index(curLeft),
          curCenter = $(".slider").find(".slider--item-center"),
          curCenterPos = $(".slider").children().index(curCenter),
          curRight = $(".slider").find(".slider--item-right"),
          curRightPos = $(".slider").children().index(curRight),
          totalWorks = $(".slider").children().length,
          $left = $(".slider--item-left"),
          $center = $(".slider--item-center"),
          $right = $(".slider--item-right"),
          $item = $(".slider--item");

        $(".slider").animate({ opacity: 0 }, 400);

        setTimeout(function () {
          if ($this.hasClass("slider--next")) {
            if (
              curLeftPos < totalWorks - 1 &&
              curCenterPos < totalWorks - 1 &&
              curRightPos < totalWorks - 1
            ) {
              $left
                .removeClass("slider--item-left")
                .next()
                .addClass("slider--item-left");
              $center
                .removeClass("slider--item-center")
                .next()
                .addClass("slider--item-center");
              $right
                .removeClass("slider--item-right")
                .next()
                .addClass("slider--item-right");
            } else {
              if (curLeftPos === totalWorks - 1) {
                $item
                  .removeClass("slider--item-left")
                  .first()
                  .addClass("slider--item-left");
                $center
                  .removeClass("slider--item-center")
                  .next()
                  .addClass("slider--item-center");
                $right
                  .removeClass("slider--item-right")
                  .next()
                  .addClass("slider--item-right");
              } else if (curCenterPos === totalWorks - 1) {
                $left
                  .removeClass("slider--item-left")
                  .next()
                  .addClass("slider--item-left");
                $item
                  .removeClass("slider--item-center")
                  .first()
                  .addClass("slider--item-center");
                $right
                  .removeClass("slider--item-right")
                  .next()
                  .addClass("slider--item-right");
              } else {
                $left
                  .removeClass("slider--item-left")
                  .next()
                  .addClass("slider--item-left");
                $center
                  .removeClass("slider--item-center")
                  .next()
                  .addClass("slider--item-center");
                $item
                  .removeClass("slider--item-right")
                  .first()
                  .addClass("slider--item-right");
              }
            }
          } else {
            if (curLeftPos !== 0 && curCenterPos !== 0 && curRightPos !== 0) {
              $left
                .removeClass("slider--item-left")
                .prev()
                .addClass("slider--item-left");
              $center
                .removeClass("slider--item-center")
                .prev()
                .addClass("slider--item-center");
              $right
                .removeClass("slider--item-right")
                .prev()
                .addClass("slider--item-right");
            } else {
              if (curLeftPos === 0) {
                $item
                  .removeClass("slider--item-left")
                  .last()
                  .addClass("slider--item-left");
                $center
                  .removeClass("slider--item-center")
                  .prev()
                  .addClass("slider--item-center");
                $right
                  .removeClass("slider--item-right")
                  .prev()
                  .addClass("slider--item-right");
              } else if (curCenterPos === 0) {
                $left
                  .removeClass("slider--item-left")
                  .prev()
                  .addClass("slider--item-left");
                $item
                  .removeClass("slider--item-center")
                  .last()
                  .addClass("slider--item-center");
                $right
                  .removeClass("slider--item-right")
                  .prev()
                  .addClass("slider--item-right");
              } else {
                $left
                  .removeClass("slider--item-left")
                  .prev()
                  .addClass("slider--item-left");
                $center
                  .removeClass("slider--item-center")
                  .prev()
                  .addClass("slider--item-center");
                $item
                  .removeClass("slider--item-right")
                  .last()
                  .addClass("slider--item-right");
              }
            }
          }
        }, 400);

        $(".slider").animate({ opacity: 1 }, 400);
      });
    }
    workSlider();
  });
})();


// Observer
var sections = document.querySelectorAll('.section');

var observer = new IntersectionObserver((observed) => {
  for (let i = 0; i < observed.length; i++) {
    observed[i].target.classList.toggle('active', observed[i].isIntersecting)
  }
},
    {
      threshold: .6
    })

sections.forEach(section => {
  observer.observe(section)
})

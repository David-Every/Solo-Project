"use strict";

// console.log("App.js connected");
// document.onload({
disableScroll(); // });

var cookie = ""; //#region Cookie basic

function getCookieValue(name) {
  var nameString = name + "=";
  var value = document.cookie.split(";").filter(function (item) {
    return item.includes(nameString);
  });

  if (value.length) {
    return value[0].substring(nameString.length, value[0].length);
  } else {
    return "";
  }
}

function checkCookie(cookie) {
  if (getCookieValue(cookie)) {
    $("#site-overlay-pop, #cookieWrapper").css({
      "display": "none"
    });
    enableScroll();
  } else {
    console.log("cookie not found");
  }
}

$("#accept").on("click", function () {
  console.log("Accept clicked");
  cookie = document.cookie = "CookieConsent=" + encodeURIComponent("Cookie Consent Granted");
  checkCookie(cookie);
});
checkCookie(cookie); // Scroll controlling

function disableScroll() {
  // Get the current page scroll position
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  scrollLeft = window.pageXOffset || document.documentElement.scrollLeft, // if any scroll is attempted, set this to the previous value
  window.onscroll = function () {
    window.scrollTo(scrollLeft, scrollTop);
  };
}

function enableScroll() {
  window.onscroll = function () {};
}
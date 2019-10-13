function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}

/* COMMENTS LAST BORDER REMOVAL */
$(function() {
  var comments = $('div.article-comment-top');
  var last = comments.last();
  last.css({ borderBottom : 'none' });
});

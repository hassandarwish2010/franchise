$('.delete_confirmation').on('click', function (e) {
  e.preventDefault();
  $(document).find('#confirm_modal').attr('action', $(this).attr('data-action'));
});

$('.approve_confirmation').on('click', function (e) {
  e.preventDefault();
  $(document).find('#approve_modal').attr('action', $(this).attr('data-action'));
});

$('.ban_confirmation').on('click', function (e) {
  e.preventDefault();
  $(document).find('#ban_modal').attr('action', $(this).attr('data-action'));
});

//Load seo info
function loadSeoInfo() {
    var details = CKEDITOR.instances.editor1.getData();
    var details = strip(details);
    var name = $("input[name=name]").val();
    $("textarea[name=description]").text(details);
    $("input[name=keywords]").val(name.replace(/ /g, ','));
    $("input[name=permalink]").val(name.toLowerCase().replace(/ /g, '-').substring(0, 50));
}

//Load Englist seo info
function loadEnSeoInfo() {
    var details = CKEDITOR.instances.editor1.getData();
    var details = strip(details);
    var name = $("input[name=en_name]").val();
    $("textarea[name=description]").text(details);
    $("input[name=keywords]").val(name.replace(/ /g, ','));
    $("input[name=permalink]").val(name.toLowerCase().replace(/ /g, '-').substring(0, 50));
}

//Load seo info
function loadNewsSeoInfo() {
    var details = CKEDITOR.instances.editor1.getData();
    var details = strip(details);
    var name = $("input[name=en_title]").val();
    $("textarea[name=description]").text(details);
    $("input[name=keywords]").val(name.replace(/ /g, ','));
    $("input[name=permalink]").val(name.toLowerCase().replace(/ /g, '-').substring(0, 50));
}

// Strip html tags
function strip(html) {
   var tmp = document.createElement("DIV");
   tmp.innerHTML = html;
   return tmp.textContent || tmp.innerText || "";
}

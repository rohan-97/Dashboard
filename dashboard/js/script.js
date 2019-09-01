document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.tooltipped');
  var instances = M.Tooltip.init(elems);
});

function copyStringToClipboard(str) {
  // Create new element
  var el = document.createElement('textarea');
  // Set value (string to be copied)
  el.value = encodeURI(str.trim());
  // Set non-editable to avoid focus and move outside of view
  el.setAttribute('readonly', '');
  el.style = {position: 'absolute', left: '-9999px'};
  document.body.appendChild(el);
  // Select text inside element
  el.select();
  // Copy text to clipboard
  ret = document.execCommand('copy');
  // Remove temporary element
  document.body.removeChild(el);
  return ret;
}

function copyThat(param) {
  console.log(directories);
  ret = copyStringToClipboard("http://"+window.location.hostname+"/patches/"+$(param).parent().parent().text().slice(0,-12));
  if(ret){
    M.toast({html: 'Successfully Copied to clipboard!'});
  }
}

function sortAndReloadList(method){
  var arr = Array();
    if(method == 'date'){
      arr = patch_list.sort(function(a,b){ 
        return a.modified_date < b.modified_date? -1:1; 
      });
    } else {
      arr = patch_list.sort(function(a,b){ 
        return a.filename.toUpperCase() < b.filename.toUpperCase()? -1:1; 
      });
    }
  $('ul.collection.with-header').text("");
  $('ul.collection.with-header').append('<li class="collection-header"><h4>Fetch Patches from Here...</h4></li>');
  arr.map(ele=>ele.filename).forEach(ele => {
    $('ul.collection.with-header').append('<li class="collection-item"><div>'+ele+'<a href="#!" class="secondary-content"><i class="material-icons black-text tooltipped" data-position="top" data-tooltip="Copy to clipboard" onclick="copyThat(this)">content_copy</i></a></div></li>');
  });
}

$('input.radiobuttons').on('change', function(){
  var data = $(this).data('html');
  sortAndReloadList(data);
});
function load_dirs(){
  $(".dircontainer").text("");
  directories.forEach(ele=>{
    href_link = encodeURI("http://"+window.location.hostname+"/"+ele+"/");
    $(".dircontainer").append('<li class="collection-item avatar"><i class="material-icons circle">folder</i><span class="title">'+ele+'</span><a href="'+href_link+'" target="blank" class="secondary-content"><i class="material-icons">grade</i></a></li>');
  });
}
sortAndReloadList('date');
load_dirs();
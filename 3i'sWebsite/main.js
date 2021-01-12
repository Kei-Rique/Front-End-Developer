
  var publicSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1_Ty6ZVwLpcW8Jdfyyy9plTcq2vetasBRfq01gIYfObU/edit#gid=0';
  
  function init() {
    Tabletop.init( { key: publicSpreadsheetUrl,
                     callback: showInfo,
                     simpleSheet: true } )
  }

 
function showInfo(tabletop, data) {
  tabletop.forEach(function(tabletop) {
    Article.innerHTML = tabletop.Article;
    Description.innerHTML = tabletop.Description;
    Link.innerHTML = tabletop.Link;
    
 });
}

window.addEventListener('DOMContentLoaded', init)













































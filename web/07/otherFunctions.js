function refreshEvents() {
  $.get('http://calendar.byui.edu/RSSFeeds.aspx?data=tq9cbc8b%2btuQeZGvCTEMSP%2bfv3SYIrjQ3VTAXA335bE0WtJCqYU4mp9MMtuSlz6MRZ4LbMUU%2fO4%3d', function (data) {
    $(data).find("item").each(function () { // or "item" or whatever suits your feed
      var el = $(this);
      console.log("------------------------");
      console.log("title      : " + el.find("title").text());
      console.log("author     : " + el.find("author").text());
      console.log("description: " + el.find("description").text());
    });
  });
}

function refreshEvents() {
  console.log("refresh events called");
  $.get('https://calendar.byui.edu/RSSFeeds.aspx?data=tq9cbc8b%2btuQeZGvCTEMSP%2bfv3SYIrjQ3VTAXA335bE0WtJCqYU4mp9MMtuSlz6MRZ4LbMUU%2fO4%3d', function (data) {
    $(data).find("item").each(function () { // or "item" or whatever suits your feed
      var el = $(this);
      var time = "";
      var description = el.find("description").text();
      var location = "";
      for (var i = 0; i < description.length; i++) {
        if (description.charAt(i) === '-') {
          time = description.substring(0, i - 1);
          description = description.substring(i + 2);
          break;
        }
      }
      for (var j = 0; j < description.length; j++) {
        if (description.charAt(j) === ':') {
          location = description.substring(0, j);
          description = description.substring(j + 2);
          break;
        }
      }
      if (location.length === 0) {
        location = description;
        description = "";
      }
    });
  });
}

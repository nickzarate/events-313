function refreshEvents() {
  console.log("refresh events called");
  $.get('https://calendar.byui.edu/RSSFeeds.aspx?data=tq9cbc8b%2btuQeZGvCTEMSP%2bfv3SYIrjQ3VTAXA335bE0WtJCqYU4mp9MMtuSlz6MRZ4LbMUU%2fO4%3d', function (data) {
    $(data).find("item").each(function () { // or "item" or whatever suits your feed
      var el = $(this);
      var time = "";
      var description = el.find("description").text();
      var location = "";
      console.log("before getting the time");
      console.log(description);
      console.log(time);
      for (var i = 0; i < description.length; i++) {
        if (description.charAt(i) === '-') {
          time = description.substring(0, i - 1);
          description = description.substring(i + 2);
          break;
        }
      }
      console.log("before getting the location");
      console.log(description);
      console.log(time);
      for (var j = 0; j < description.length; j++) {
        if (description.charAt(j) === ':') {
          location = description.substring(0, j);
          description = description.substring(j + 2);
          break;
        }
      }
      console.log("------------------------");
      console.log("title: " + el.find("title").text());
      console.log("time: " + time);
      console.log("description: " + description);
      console.log("location: " + location);
    });
  });
}

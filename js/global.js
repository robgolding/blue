$(function() {
    var $container = $('#older-posts');
    var $morePosts = $container.find('a');
    $morePosts.text('+ More Posts');
    
    var url = $morePosts.attr('href');
    var $target = $('#posts');

    var $spinner = $('<img class="spinner" src="/wp-content/themes/blue/img/ajax-loader.gif">');

    $morePosts.click(function() {
        // Add ajax-loader spinning gif image
        $container.append($spinner);

        $.get(url, function(data) {
            // Remove the spinner
            $spinner.remove();
            
            // Get data from the next page of posts
            var $data = $(data);
            var $posts = $data.find('section.post');
            var $link = $data.find('#older-posts a');

            if ($link.length != 0) {
                url = $link.attr('href');
                $morePosts.attr('href', url);
            } else {
                var $message = $('<span class="small">There are no more posts</span>');
                $('#older-posts').html($message);
                
                $morePosts.unbind('click');
                $morePosts.click(function() { return false });
                $morePosts.removeAttr('href');
                $morePosts.addClass('disabled');
                
                $message.fadeIn();
            }
            
            // Insert the new posts into the page
            var $div = $('<div></div>');
            $div.hide();
            $target.append($div);
            
            $posts.each(function() {
                $div.append($(this));
            });

           $div.slideDown();
        });
        return false;
    });
});

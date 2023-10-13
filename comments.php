<!-- <section class="comments">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p>Write your comment</p>
            </div>
            <div class="comment-box">

            </div>
        </div>
    </div>
</section> -->
<div class="detailBox">
    <div class="titleBox">
      <label>Comment Box</label>
        <?php
            if (!have_comments(  )){
               echo "leave a comments";
            }
            else{
               echo get_comments_number() . "comments";
            }
        ?>
        <!-- <button type="button" class="close" aria-hidden="true">&times;</button> -->
    </div>
    <div class="commentBox">
        
        <p class="taskDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <?php
                wp_list_comments(array(
                    'avatar_size' => 120,
                    'style' => 'div',
                ));
            ?>
            <!-- <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/50/50" />
                </div>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
            </li>
            <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/45/45" />
                </div>
                <div class="commentText">
                    <p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
            </li>
            <li>
                <div class="commenterImage">
                  <img src="http://placekitten.com/40/40" />
                </div>
                <div class="commentText">
                    <p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

                </div>
            </li> -->
        </ul>
        <!-- <form class="form-inline" role="form">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Your comments" />
            </div>
            <div class="form-group">
                <button class="btn btn-default">Add</button>
            </div>
        </form> -->
        <?php
            if(comments_open()){
                comment_form( array(
                    'class_form'=>'',
                    'title_reply_befor' => '<h2 class= "comment-replay-title" id="reply-title">',
                    'title_reply_after' => '</h2>',
                )
            );
            }
        ?>
    </div>
</div>
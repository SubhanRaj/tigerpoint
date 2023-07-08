<x-layout>
    <div class="lx-single-post">
        <div class="lx-single-post-header">
            <h1>{{ $post->title }}</h1>
            <span class="lx-post-date">{{ $post->created_at->format('M d, Y') }}</span>
            <x-tags :tagsCsv="$post->tags" />
        </div>

        <div class="lx-single-post-thumbnail">
            <img alt="{{$post->title}}" src="{{$post->image}}" />
            <p>{{$post->short_description}}</p>
        </div>
        <div class="lx-single-post-content">
            <p>{{$post->long_description}}</p>
            <p>This <a href="#">page</a> helps you to identify the skills you need to set life goals which can enhance your employability prospects, raise your confidence, and lead to a more fulfilling, higher quality life. Plan to make relevant, positive and effective life choices and decisions for your future to enable personal empowerment.</p>
            <h2>Managing Your Personal Development</h2>
            <p>There are a number of steps to take in managing your personal development.</p>
            <h3>1. Developing a Personal Vision</h3>
            <p>Personal development can simply be for fun. Most of us, however, find it easier to motivate ourselves to learn and improve if we have a purpose in doing so. Developing your personal vision - a clear idea of where you want to be in a few months or years, and why - is a crucial part of developing this purpose.</p>
            <p>There is more about this in our <a href="#">pages</a> on Developing a Personal Vision, Refining and Narrowing Your Vision, and Setting Personal Goals.</p>
            <h3>2. Planning Your Personal Development</h3>
            <p>Once you are clear about where you want to be, you can start planning how to get there. Drawing up a personal development plan is not essential, but it does make the planning process more realistic.</p>
            <p>For more about this part of the process, take a look at our <a href="#">page</a> on Planning Your Personal Development.</p>
            <p>If you are struggling to identify which areas to target for development and improvement, you may find it helpful to read our <a href="#">pages</a> on Personal SWOT Analysis and Identifying Areas for Improvement.</p>
            <h3>3. Starting the Improvement Process</h3>
            <p>There are a number of different ways in which you can learn and develop.</p>
            <p>Our <a href="#">page</a> on Improving Performance – Some Specific Techniques explains some ways of learning, including a technique called expertise transfer.</p>
            <p>Our <a href="#">page</a> on Learning Preferences suggests how different types of learning process may be more effective for certain people. You may also find our <a href="#">page</a> on Learning Styles helpful in understanding how you like to learn.</p>
            <h3>4. Recording Your Personal Development</h3>
            <p>It is often a good idea to keep a record of your personal development. By writing down key developments in your learning and development as and when they occur, you will be able to reflect on your successes at a later date.</p>
            <p>There is more about this on our <a href="#">page</a>, Recording Your Personal Development.</p>
            <p>This reflection may well help to motivate you to learn more skills in the future. Try keeping a learning log or journal as you develop your skills and knowledge.</p>
            <h3>5. Reviewing and Revising Personal Development Plans</h3>
            <p>Our <a href="#">page</a> on Learning Styles uses Kolb’s Experiential Learning Cycle to show that learning is a cycle. For more effective learning, it is important to reflect on your experience, and consider what you have learnt from it. Regular review of your personal development plans, and your development activities, will ensure that you learn from what you have done. It will also ensure that your activities continue to move you towards your goals, and that your goals or vision remain relevant to you.</p>
        </div>
        <div class="lx-single-post-footer">
            <h3><span>Written by:</span></h3>
            <p>{{$post->author_name}}</p>
        </div>
        <div class="lx-single-post-share">
            <h3><span>Share on:</span></h3>
            <ul>
                <li><a href="#" class="lx-facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="lx-twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="lx-linkedin"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#" class="lx-google-plus"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="lx-pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="lx-single-post-comment">
            <h3><span>Comments (3)</span></h3>
            <div class="lx-single-post-comment-list">
                <div class="lx-single-post-comment-item">
                    <div class="lx-single-post-comment-img">
                        <img src="{{asset('images/profile2.jpg')}}" alt="Alternative title" />
                    </div>
                    <a href="#">Sakata Gintoki</a>
                    <span>17, June 2017 at 10:20 pm</span>
                    <div class="lx-single-post-comment-content">
                        <p>In his honour, Google is changing its logo in 28 countries to a doodle, or illustration, of him and the Chandrasekhar Limit. But in his lifetime, the Indian American astrophysicist was not always recognised for his achievements. This is his story:</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="material-icons">favorite_border</i>55 Like</a></li>
                        <li><a href="#"><i class="material-icons">comment</i> Reply</a></li>
                    </ul>
                    <div class="lx-clear-fix"></div>
                    <div class="lx-single-post-comment-item">
                        <div class="lx-single-post-comment-img">
                            <img src="{{asset('images/profile1.jpg')}}" alt="Alternative title" />
                        </div>
                        <a href="#">Sakata Gintoki</a>
                        <span>17, June 2017 at 10:20 pm</span>
                        <div class="lx-single-post-comment-content">
                            <p>In his honour, Google is changing its logo in 28 countries to a doodle, or illustration, of him and the Chandrasekhar Limit. But in his lifetime, the Indian American astrophysicist was not always recognised for his achievements. This is his story:</p>
                        </div>
                        <ul>
                            <li><a href="#"><i class="material-icons">favorite_border</i>55 Like</a></li>
                            <li><a href="#"><i class="material-icons">comment</i> Reply</a></li>
                        </ul>
                        <div class="lx-clear-fix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lx-single-post-comment lx-mb-0">
            <h3><span>Leave a comment</span></h3>
            <div class="lx-single-post-comment-form">
                <p>Your email address will not be published. Required fields are marked *</p>
                <form action="#" method="post">
                    <div class="lx-textfield lx-g3-f lx-pb-20 lx-pr-10">
                        <input type="text" name="fullname" placeholder="Name:*" />
                    </div>
                    <div class="lx-textfield lx-g3-f lx-pb-20 lx-prl-10">
                        <input type="text" name="email" placeholder="Email:*" />
                    </div>
                    <div class="lx-textfield lx-g3-f lx-pb-20 lx-pl-10">
                        <input type="text" name="website" placeholder="Website:" />
                    </div>
                    <div class="lx-clear-fix"></div>
                    <div class="lx-textarea lx-g1-f lx-pb-20">
                        <textarea name="message" placeholder="Your comment"></textarea>
                    </div>
                    <div class="lx-submit lx-g1-f">
                        <input type="submit" name="submit" value="Post Comment" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
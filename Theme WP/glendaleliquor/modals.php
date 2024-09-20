<!--<div class="fix-block">-->
<!--    <div class="content">-->
<!--        <a href="#" class="close-fix"><i class="fal fa-times"></i></a>-->
<!--        <h4 class="title">Cookies</h4>-->
<!--        <p>We use cookies and similar technologies to help personalise contetn and measure ads, and privide a better experience. By clicking accept, you agree to this, as outlined in our Cookie Policy</p>-->
<!--        <div class="btn-wrap">-->
<!--            <a href="#" class="btn-default btn-gold btn-small"><span>Accept</span></a>-->
<!--            <a href="#" class="btn-default btn-gold btn-light-gold btn-small"><span>Preferences</span></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="popup-reviews popup-default" id="add-review" style="display: none;">
    <div class="main">
        <h3>Leave your review</h3>
        <form action="#" class="default-form ">
            <div class="input-wrap">
                <label for="name">First name *</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="input-wrap">
                <label for="last-name">Last name *</label>
                <input type="text" name="last-name" id="last-name" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="input-wrap input-wrap-full select-block">
                <label class="form-label" for="select-1">Sex</label>
                <select id="select-1">
                    <option value="0">Female</option>
                    <option value="1">Male</option>
                </select>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="message">Your review</label>
                <textarea name="message" id="message" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
            </div>
            <div class="input-wrap input-wrap-full input-wrap-stars">
                <div>
                    <input type="radio" id="star-1" name="star">
                    <label for="star-1"><img src="img/star-full.svg" alt=""></label>
                    <input type="radio" id="star-2" name="star">
                    <label for="star-2"><img src="img/star.svg" alt=""></label>
                    <input type="radio" id="star-3" name="star">
                    <label for="star-3"><img src="img/star.svg" alt=""></label>
                    <input type="radio" id="star-4" name="star">
                    <label for="star-4"><img src="img/star.svg" alt=""></label>
                    <input type="radio" id="star-5" name="star">
                    <label for="star-5"><img src="img/star.svg" alt=""></label>
                </div>
            </div>
            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-medium "><span>Send</span></button>
            </div>
        </form>
    </div>
</div>

<div class="confirm-popup" id="confirm-popup" style="display: none">
    <div class="main">
        <h3>confirm your age</h3>
        <p>As an alcohol website, we are prohibited from advertising to minors. Please confirm that you are <b>21 years of age or older</b> to enter.</p>
        <div class="btn-wrap">
            <a href="#" class="btn-default btn-small" data-fancybox-close><span>Confirm</span></a>
            <a href="#" class="btn-default btn-small btn-gold" data-fancybox-close><span>Exit</span></a>
        </div>
    </div>
</div>

<!--попап з календарем-->
<div class="popup-date popup-default" id="popup-date" style="display: none;">
    <div class="main">
        <h3>Leave your review</h3>
        <form action="#" class="default-form ">
            <div class="input-wrap">
                <label for="name2">First name *</label>
                <input type="text" name="name" id="name2" required>
            </div>
            <div class="input-wrap">
                <label for="last-name2">Last name *</label>
                <input type="text" name="last-name" id="last-name2" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="tel-1">Phone *</label>
                <input type="text" name="tel-1" id="tel-1" required class="tel-1">
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="address-popup-1">Address</label>
                <input type="text" name="address-popup-1" id="address-popup-1" required>
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="date">Event/Delivery Date:</label>
                <input type="text" name="date" id="date" required class="date-1">
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="message2">Comments:</label>
                <textarea name="message" id="message2" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
            </div>

            <div class="input-wrap-submit">
                <button type="submit" class="btn-default btn-medium "><span>Send</span></button>
            </div>
        </form>
    </div>
</div>
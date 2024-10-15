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
        <?php if (comments_open()) {
            comments_template('/woocommerce/single-product-reviews.php');
        }?>
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
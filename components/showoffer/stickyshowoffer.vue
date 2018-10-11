<template>
    <div>
        <div class="uk-width-1-1@s uk-width-3-4@m uk-padding-remove uk-position-fixed uk-button-group uk-visible@m" style="bottom:0px;">
            <a class="uk-button uk-button-primary uk-width-1-3 uk-button-small" href="#modal-call" uk-toggle><span uk-icon="receiver"></span><br>Telpon</a>
            <a class="uk-button uk-button-danger uk-width-1-3 uk-button-small" href="https://phinemo.com/"><span uk-icon="world"></span><br>Website</a>
        </div>

        <div class=" uk-width-1-1@s uk-width-1-2@m uk-padding-remove uk-position-fixed uk-flex-center uk-button-group uk-hidden@m " style="bottom:0px;">
            <a class="uk-button uk-button-primary uk-width-1-3 uk-button-small"  href="#modal-mobile-call" uk-toggle><span uk-icon="receiver"></span><br>Telpon</a>
            <a class="uk-button uk-button-secondary uk-width-1-3 uk-button-small" href="#modal-mobile-mail" uk-toggle><span uk-icon="mail"></span><br>Pesan</a>
            <a class="uk-button uk-button-danger uk-width-1-3 uk-button-small" href="https://phinemo.com/"><span uk-icon="world"></span><br>Website</a>
        </div>

        <div id="modal-call" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">
                    <h2 class="uk-modal-title uk-text-center">Contact</h2>
                </div>
                <div class="uk-modal-body">
                    <ul>
                        <li class="uk-margin-small-bottom uk-text-bold">Email : <br>
                                <a href="soegeng@phinemomedia.com">soegeng@phinemomedia.com</a><br>
                                <a href="fahd@phinemo.com">fahd@phinemo.com</a>
                        </li>
                        <li class="uk-text-bold">Call Tour Operator : 
                            <p class="uk-margin-remove-bottom">Soegeng
                                <ul>
                                    <li>Phone : 085950291823 </li>
                                    <li>Whatsapp : 085950291823 </li>
                                </ul>
                            </p>
                            <p class="uk-margin-remove-bottom uk">Fahd
                                <ul>
                                    <li>Phone : 081319321192</li>
                                    <li>Whatsapp : 081319321192</li>
                                </ul>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="uk-modal-footer uk-text-right"></div>
            </div>
        </div>

        <div id="modal-mobile-call" uk-modal>
            <div class="uk-modal-dialog uk-position-bottom" style="height:auto;" >
                <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                <div class="uk-modal-footer uk-text-center uk-width-1-1">
                    <a class="uk-margin-small-right" href="https://wa.me/+6282335478000"><img src="img/wa.svg" width="48" height="48" alt=""></a>
                    <a href="tel:+6282335478000"><img src="img/phone.svg" width="48" height="48" alt=""></a>
                </div>
            </div>
        </div>

        <div id="modal-mobile-mail" uk-modal>
            <div class="uk-modal-dialog uk-position-bottom" style="height:auto;" >
                <button class="uk-modal-close-outside uk-padding-small" type="button" uk-close></button>
                <div class="uk-modal-footer uk-text-center uk-width-1-1">
                    <a class="uk-margin-small-right" href="https://wa.me/+6282335478000"><img src="img/wa.svg" width="48" height="48" alt=""></a>
                    <a class="uk-margin-small-right" href="sms:+6282335478000?body= Welcome Phinemo Merchant"><img src="img/mail.svg" width="48" height="48" alt=""></a>
                    <a href="sms:+6282335478000&body= Welcome Phinemo Merchant"><img src="img/ios.svg" width="48" height="48" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    
</template>

<script>
    module.exports = {
        data: function () {
            return {

            }
        }
    };
</script>
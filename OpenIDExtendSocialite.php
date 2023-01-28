<?php

namespace BarbatosClub\BsSocialiteProviderWordpressOpenID;

use SocialiteProviders\Manager\SocialiteWasCalled;

class OpenIDExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('barbatos-club-openid', __NAMESPACE__.'\Provider');
    }
}

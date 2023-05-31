<?php

namespace SocialiteProviders\BrunSolutions;

use SocialiteProviders\Manager\SocialiteWasCalled;

class BrunolutionsExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('brunsolutions', Provider::class);
    }
}

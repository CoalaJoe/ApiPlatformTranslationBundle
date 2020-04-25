<?php

declare(strict_types=1);

namespace Locastic\ApiPlatformTranslationBundle\Model;

/**
 * @author Gonzalo Vilaseca <gvilaseca@reiss.co.uk>
 */
interface TranslationInterface
{
    /**
     * @return TranslatableInterface
     */
    public function getTranslatable(): ?TranslatableInterface;

    /**
     * @param TranslatableInterface $translatable
     */
    public function setTranslatable(?TranslatableInterface $translatable): void;

    /**
     * @return null|string
     */
    public function getLocale(): ?string;

    /**
     * @param null|string $locale
     */
    public function setLocale(?string $locale): void;
}

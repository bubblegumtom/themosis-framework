<?php

namespace Themosis\Page\Contracts;

interface PageInterface
{
    /**
     * Return the page slug.
     *
     * @return string
     */
    public function getSlug(): string;

    /**
     * Set the page slug.
     *
     * @param string $slug
     *
     * @return PageInterface
     */
    public function setSlug(string $slug): PageInterface;

    /**
     * Return the page title.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Set the page title.
     *
     * @param string $title
     *
     * @return PageInterface
     */
    public function setTitle(string $title): PageInterface;

    /**
     * Return the page menu title.
     *
     * @return string
     */
    public function getMenu(): string;

    /**
     * Set the page menu title.
     *
     * @param string $menu
     *
     * @return PageInterface
     */
    public function setMenu(string $menu): PageInterface;

    /**
     * Get the page capability.
     *
     * @return string
     */
    public function getCapability(): string;

    /**
     * Set the page capability.
     *
     * @param string $cap
     *
     * @return PageInterface
     */
    public function setCapability(string $cap): PageInterface;

    /**
     * Return the page icon.
     *
     * @return string
     */
    public function getIcon(): string;

    /**
     * Set the page icon.
     *
     * @param string $icon
     *
     * @return PageInterface
     */
    public function setIcon(string $icon): PageInterface;

    /**
     * Return the page position.
     *
     * @return int
     */
    public function getPosition(): int;

    /**
     * Set the page position.
     *
     * @param int $position
     *
     * @return PageInterface
     */
    public function setPosition(int $position): PageInterface;

    /**
     * Return the page parent.
     *
     * @return string|null
     */
    public function getParent();

    /**
     * Set the page parent.
     *
     * @param string $parent
     *
     * @return PageInterface
     */
    public function setParent(string $parent): PageInterface;

    /**
     * Set the page for network display.
     *
     * @param bool $network
     *
     * @return PageInterface
     */
    public function network(bool $network = true): PageInterface;

    /**
     * Check if the page is for network rendering.
     *
     * @return bool
     */
    public function isNetwork(): bool;

    /**
     * Set the page. Display it on the WordPress administration.
     *
     * @return PageInterface
     */
    public function set(): PageInterface;

    //public function addSections();

    //public function addSettings();

    //public function validate();
}

<?php

/**
 * Class SimpleSurveyValues
 *
 * This class owns the basic values to create a survey
 *   -- the base language
 *   -- the survey title
 *   -- if createExamples (questions and groups) should be created at the beginning
 *   -- the survey group id the survey should belong to (or/and inherit values from)
 *
 */
class SimpleSurveyValues
{

    /** @var string language selected by user */
    private $baseLanguage;

    /** @var string title of the survey */
    private $title;

    /** @var boolean creates example questiongroup and questions */
    private $createExample;

    /** @var  int the surveygroup from which the new survey will inherit values */
    private $surveyGroupId;

    /**
     * @return string
     */
    public function getBaseLanguage(): string
    {
        return $this->baseLanguage;
    }

    /**
     * @param string $baseLanguage
     */
    public function setBaseLanguage(string $baseLanguage): void
    {
        $this->baseLanguage = $baseLanguage;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return bool
     */
    public function isCreateExample(): bool
    {
        return $this->createExample;
    }

    /**
     * @param bool $createExample
     */
    public function setCreateExample(bool $createExample): void
    {
        $this->createExample = $createExample;
    }

    /**
     * @return int
     */
    public function getSurveyGroupId(): int
    {
        return $this->surveyGroupId;
    }

    /**
     * @param int $surveyGroupId
     */
    public function setSurveyGroupId(int $surveyGroupId): void
    {
        $this->surveyGroupId = $surveyGroupId;
    }


}
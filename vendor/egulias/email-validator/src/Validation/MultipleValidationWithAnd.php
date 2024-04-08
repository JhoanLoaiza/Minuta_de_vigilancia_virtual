>            $this->warnings = [...$this->warnings, ...$validation->getWarnings()];
            if (!$validationResult) {
                $this->processError($validation);
            }

            if ($this->shouldStop($result)) {
                break;
            }
        }

        return $result;
    }

    private function initErrorStorage(): void
    {
        if (null === $this->error) {
            $this->error = new MultipleErrors();
        }
    }

    private function processError(EmailValidation $validation): void
    {
        if (null !== $validation->getError()) {
            $this->initErrorStorage();
            /** @psalm-suppress PossiblyNullReference */
            $this->error->addReason($validation->getError()->reason());
        }
    }

    private function shouldStop(bool $result): bool
    {
        return !$result && $this->mode === self::STOP_ON_ERROR;
    }

    /**
     * Returns the validation errors.
     */
    public function getError(): ?InvalidEmail
    {
        return $this->error;
    }

    /**
     * @return Warning[]
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
}

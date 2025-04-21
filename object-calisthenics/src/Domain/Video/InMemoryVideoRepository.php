<?php

namespace Alura\Calisthenics\Domain\Video;

use Alura\Calisthenics\Domain\Student\Student;

class InMemoryVideoRepository implements VideoRepository
{
    // O php não permite tipagem de array, então não podemos usar array<Video>, sendo assim pode ser útil extrair a coleção para uma classe
    private array $videos;

    public function add(Video $video): self
    {
        $this->videos[] = $video;

        return $this;
    }

    public function videosFor(Student $student): array
    {
        return array_filter(
            $this->videos,
            fn(Video $video) => $video->getAgeLimit() <= $student->age()
        );
    }
}

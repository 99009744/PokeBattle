<?php
    class MoveCollection extends ArrayCollection
    {
        protected function getTarget(): string
        {
            return Move::class;
        }
    }
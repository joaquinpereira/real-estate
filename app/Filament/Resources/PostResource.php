<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\User;
use Filament\Forms;
use Closure;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\Grid;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(2048)
                                ->reactive()
                                ->afterStateUpdated(function(Closure $set, $state){
                                    $set('slug', Str::slug($state));
                                }),
                            Forms\Components\TextInput::make('slug')
                                ->disabled()
                                ->maxLength(2048)
                        ]),
                        Grid::make(2)->schema([
                            Forms\Components\Select::make('user_id')
                                ->relationship('user', 'name')
                                ->required(),
                            Forms\Components\Select::make('category_id')
                                ->relationship('category', 'title')
                                ->required(),
                        ]),
                        Forms\Components\TextInput::make('summary')
                            ->maxLength(2048),
                        Forms\Components\RichEditor::make('content')
                            ->maxLength(65535),
                ])->columnSpan(8),

                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\Toggle::make('active'),
                        Forms\Components\Select::make('tag_id')
                            ->multiple()
                            ->relationship('tags', 'title')
                            ->required(),

                        Forms\Components\DateTimePicker::make('published_at'),

                        Forms\Components\FileUpload::make('poster'),

                ])->columnSpan(4)

            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('poster'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ToggleColumn::make('active'),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('category.title'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

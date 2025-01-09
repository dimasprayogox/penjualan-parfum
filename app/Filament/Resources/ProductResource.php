<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $label = 'Data Produk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('Nama Produk'),
                Forms\Components\Select::make('kategori_id') ->label('Kategori')
                    ->relationship('kategori', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Upload Image')
                    ->disk('public') // Pastikan disk ini ada di config/filesystems.php
                    ->directory('images/products') // Folder tempat menyimpan gambar
                    ->required(),
                Forms\Components\TextArea::make('description')->required()->label('Deskripsi'),
                Forms\Components\TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->step(0.01),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable()->label('Nama Produk'),
                Tables\Columns\TextColumn::make('kategori.name')->label('Kategori'),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi'),
                Tables\Columns\TextColumn::make('price')->label('Harga')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 2, ',', '.')),
                Tables\Columns\ImageColumn::make('image') // Menggunakan ImageColumn untuk gambar
                    ->label('Image')
                    ->disk('public') // Pastikan disk ini sama dengan yang digunakan saat upload
                    ->size(50), // Ukuran gambar yang ditampilkan
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

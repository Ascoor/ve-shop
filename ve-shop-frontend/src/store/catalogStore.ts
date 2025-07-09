import { create } from 'zustand';
import { persist } from 'zustand/middleware';

export interface Category {
  id: string;
  name: string;
  icon?: string;
}

export interface Product {
  id: string;
  categoryId: string;
  name: string;
  price: number;
  originalPrice?: number;
  rating: number;
  reviewCount: number;
  image: string;
  description?: string;
  stock?: number;
  badge?: string;
  isOnSale?: boolean;
}

interface CatalogState {
  categories: Category[];
  products: Product[];
  addCategory: (category: Category) => void;
  updateCategory: (id: string, data: Partial<Category>) => void;
  removeCategory: (id: string) => void;
  addProduct: (product: Product) => void;
  updateProduct: (id: string, data: Partial<Product>) => void;
  removeProduct: (id: string) => void;
  getProductsByCategory: (id: string) => Product[];
}

const initialCategories: Category[] = [
  { id: 'electronics', name: 'Electronics', icon: '📱' },
  { id: 'fashion', name: 'Fashion', icon: '👕' },
  { id: 'beauty', name: 'Beauty', icon: '💄' },
  { id: 'home', name: 'Home', icon: '🏠' },
  { id: 'sports', name: 'Sports', icon: '⚽' }
];

const initialProducts: Product[] = [
  // Electronics
  {
    id: 'e1',
    categoryId: 'electronics',
    name: 'Wireless Bluetooth Headphones',
    price: 89.99,
    originalPrice: 129.99,
    rating: 4.5,
    reviewCount: 1247,
    image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400&h=400&fit=crop',
    isOnSale: true
  },
  {
    id: 'e2',
    categoryId: 'electronics',
    name: 'Smart Fitness Watch',
    price: 199.99,
    rating: 4.8,
    reviewCount: 892,
    image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop',
    badge: 'New'
  },
  {
    id: 'e3',
    categoryId: 'electronics',
    name: 'Professional Camera Lens 50mm',
    price: 299.99,
    originalPrice: 349.99,
    rating: 4.7,
    reviewCount: 456,
    image: 'https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=400&h=400&fit=crop',
    isOnSale: true
  },
  {
    id: 'e4',
    categoryId: 'electronics',
    name: 'Ergonomic Office Chair',
    price: 349.99,
    rating: 4.6,
    reviewCount: 234,
    image: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&h=400&fit=crop'
  },
  {
    id: 'e5',
    categoryId: 'electronics',
    name: 'Mechanical Gaming Keyboard',
    price: 129.99,
    rating: 4.4,
    reviewCount: 678,
    image: 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=400&h=400&fit=crop'
  },
  // Fashion
  {
    id: 'f1',
    categoryId: 'fashion',
    name: "Men's Classic T-Shirt",
    price: 19.99,
    rating: 4.2,
    reviewCount: 245,
    image: 'https://images.unsplash.com/photo-1528701800489-20be14fdd017?w=400&h=400&fit=crop'
  },
  {
    id: 'f2',
    categoryId: 'fashion',
    name: "Women's Summer Dress",
    price: 39.99,
    rating: 4.5,
    reviewCount: 532,
    image: 'https://images.unsplash.com/photo-1520975629995-31cb91a3d221?w=400&h=400&fit=crop'
  },
  {
    id: 'f3',
    categoryId: 'fashion',
    name: 'Stylish Sunglasses',
    price: 59.99,
    rating: 4.7,
    reviewCount: 312,
    image: 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=400&fit=crop'
  },
  {
    id: 'f4',
    categoryId: 'fashion',
    name: 'Leather Handbag',
    price: 129.99,
    rating: 4.6,
    reviewCount: 421,
    image: 'https://images.unsplash.com/photo-1585386959984-a4155223168d?w=400&h=400&fit=crop'
  },
  {
    id: 'f5',
    categoryId: 'fashion',
    name: 'Running Sneakers',
    price: 89.99,
    rating: 4.4,
    reviewCount: 289,
    image: 'https://images.unsplash.com/photo-1519741493539-3735319b6329?w=400&h=400&fit=crop'
  },
  // Beauty
  {
    id: 'b1',
    categoryId: 'beauty',
    name: 'Luxury Lipstick',
    price: 29.99,
    rating: 4.8,
    reviewCount: 542,
    image: 'https://images.unsplash.com/photo-1522337690853-ac6a0df226c6?w=400&h=400&fit=crop'
  },
  {
    id: 'b2',
    categoryId: 'beauty',
    name: 'Moisturizing Face Cream',
    price: 39.99,
    rating: 4.9,
    reviewCount: 764,
    image: 'https://images.unsplash.com/photo-1504198453319-5ce911bafcde?w=400&h=400&fit=crop'
  },
  {
    id: 'b3',
    categoryId: 'beauty',
    name: 'Perfume Spray 50ml',
    price: 59.99,
    rating: 4.7,
    reviewCount: 312,
    image: 'https://images.unsplash.com/photo-1517849845537-4d257902454a?w=400&h=400&fit=crop'
  },
  {
    id: 'b4',
    categoryId: 'beauty',
    name: 'Mascara Volume Plus',
    price: 24.99,
    rating: 4.3,
    reviewCount: 188,
    image: 'https://images.unsplash.com/photo-1585144576563-5b4c8bf78480?w=400&h=400&fit=crop'
  },
  {
    id: 'b5',
    categoryId: 'beauty',
    name: 'Essential Makeup Brush Set',
    price: 49.99,
    rating: 4.6,
    reviewCount: 236,
    image: 'https://images.unsplash.com/photo-1526045478516-99145907023c?w=400&h=400&fit=crop'
  },
  // Home
  {
    id: 'h1',
    categoryId: 'home',
    name: 'Cozy Throw Blanket',
    price: 34.99,
    rating: 4.5,
    reviewCount: 445,
    image: 'https://images.unsplash.com/photo-1556911264-5f1b0c69f5b4?w=400&h=400&fit=crop'
  },
  {
    id: 'h2',
    categoryId: 'home',
    name: 'Modern Table Lamp',
    price: 59.99,
    rating: 4.6,
    reviewCount: 367,
    image: 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=400&h=400&fit=crop'
  },
  {
    id: 'h3',
    categoryId: 'home',
    name: 'Kitchen Knife Set',
    price: 79.99,
    rating: 4.7,
    reviewCount: 512,
    image: 'https://images.unsplash.com/photo-1586201375754-1001c3276295?w=400&h=400&fit=crop'
  },
  {
    id: 'h4',
    categoryId: 'home',
    name: 'Decorative Plant Pot',
    price: 24.99,
    rating: 4.4,
    reviewCount: 221,
    image: 'https://images.unsplash.com/photo-1499951360447-b19be8fe80f5?w=400&h=400&fit=crop'
  },
  {
    id: 'h5',
    categoryId: 'home',
    name: 'Memory Foam Pillow',
    price: 49.99,
    rating: 4.8,
    reviewCount: 654,
    image: 'https://images.unsplash.com/photo-1567016551804-818c9886f0b5?w=400&h=400&fit=crop'
  },
  // Sports
  {
    id: 's1',
    categoryId: 'sports',
    name: 'Yoga Mat Pro',
    price: 29.99,
    rating: 4.6,
    reviewCount: 342,
    image: 'https://images.unsplash.com/photo-1599058917212-d750089bc06f?w=400&h=400&fit=crop'
  },
  {
    id: 's2',
    categoryId: 'sports',
    name: 'Mountain Bike Helmet',
    price: 79.99,
    rating: 4.7,
    reviewCount: 198,
    image: 'https://images.unsplash.com/photo-1519681393784-d120267933ba?w=400&h=400&fit=crop'
  },
  {
    id: 's3',
    categoryId: 'sports',
    name: 'Adjustable Dumbbell Set',
    price: 149.99,
    rating: 4.8,
    reviewCount: 421,
    image: 'https://images.unsplash.com/photo-1599058916933-aa33df2004a0?w=400&h=400&fit=crop'
  },
  {
    id: 's4',
    categoryId: 'sports',
    name: 'Football Ball Professional',
    price: 34.99,
    rating: 4.5,
    reviewCount: 245,
    image: 'https://images.unsplash.com/photo-1521412644187-c49fa049e84d?w=400&h=400&fit=crop'
  },
  {
    id: 's5',
    categoryId: 'sports',
    name: 'Outdoor Camping Tent',
    price: 199.99,
    rating: 4.7,
    reviewCount: 312,
    image: 'https://images.unsplash.com/photo-1504280390368-361c6d9f38f4?w=400&h=400&fit=crop'
  }
];

export const useCatalogStore = create<CatalogState>()(
  persist(
    (set, get) => ({
      categories: initialCategories,
      products: initialProducts,
      addCategory: (category) =>
        set((state) => ({ categories: [...state.categories, category] })),
      updateCategory: (id, data) =>
        set((state) => ({
          categories: state.categories.map((c) =>
            c.id === id ? { ...c, ...data } : c
          ),
        })),
      removeCategory: (id) =>
        set((state) => ({
          categories: state.categories.filter((c) => c.id !== id),
          products: state.products.filter((p) => p.categoryId !== id),
        })),
      addProduct: (product) =>
        set((state) => ({ products: [...state.products, product] })),
      updateProduct: (id, data) =>
        set((state) => ({
          products: state.products.map((p) =>
            p.id === id ? { ...p, ...data } : p
          ),
        })),
      removeProduct: (id) =>
        set((state) => ({
          products: state.products.filter((p) => p.id !== id),
        })),
      getProductsByCategory: (id) => {
        if (id === 'all') return get().products;
        return get().products.filter((p) => p.categoryId === id);
      },
    }),
    { name: 've-shop-catalog' }
  )
);

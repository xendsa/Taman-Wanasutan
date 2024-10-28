import React from 'react';

const TopBackground = () => {
  return (
    <div className="relative h-[50vh] bg-cover bg-center" style={{ backgroundImage: 'url(https://plus.unsplash.com/premium_photo-1703701579660-8481915a7991?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)' }}>
      <div className="absolute inset-0 bg-black bg-opacity-50 flex justify-center items-center">
      <h1 className="text-white">Background Image</h1>
      </div>
    </div>
  );
};

export default TopBackground;
